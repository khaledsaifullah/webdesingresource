import {
    usersCollection,
    groupUserRelationCollection,
    userDependentNoteCollection
} from "../../config/firebase";
import store from "../store";

const state = {
    userInfo: null
};

const getters = {
    userInfo(state) {
        return state.userInfo;
    }
};

const mutations = {
    userInfo(state, payload) {
        state.userInfo = payload;
    }
};

const actions = {
    getUserInfo({ commit }, payload) {
        return new Promise((resolve, reject) => {
            usersCollection
                .where("user_authenticate_id", "==", payload.uid)
                .get()
                .then(userDocRef => {
                    // console.log("From method ", userDocRef.docs[0].data());
                    if (userDocRef.docs.length > 0) {
                        let result = userDocRef.docs[0].data();
                        resolve(result);
                    }
                }).catch(err => {
                    reject(err);
                });
        });
    },

    getUserGroupInfo({ commit }, payload) {
        return new Promise((resolve, reject) => {
            groupUserRelationCollection
                .where("user_id", "==", payload.uid)
                .get()
                .then(userGroupsDocRef => {
                    // Found group ID
                    let userGroupInfo = userGroupsDocRef.docs[0].data();
                    resolve(userGroupInfo);
                })
                .catch(err => {
                    reject(err);
                });
        });
    },

    getAllUsersByGroupId({ commit }, payload) {
        return new Promise((resolve, reject) => {
            groupUserRelationCollection
                .where("group_id", "==", payload.group_id)
                .where("is_admin", "==", 0)
                .get()
                .then(docRef => {
                    let allUsers = [];
                    docRef.docs.forEach(user => {
                        allUsers.push(user.data());
                    });
                    resolve(allUsers);
                }).catch(err => {
                    reject(err);
                });
        });
    },

    // Get all users group emails
    getAllUserEmailsByGroupId({ commit }, payload) {
        return new Promise((resolve, reject) => {
            groupUserRelationCollection
                .where("group_id", "==", payload)
                .get()
                .then(docRef => {
                    let emails = [];
                    if (docRef.docs.length > 0) {
                        docRef.docs.forEach(group => {
                            let groupData = group.data();
                            usersCollection
                                .where("user_authenticate_id", "==", groupData.user_id)
                                .get()
                                .then(userDocRef => {
                                    let user = userDocRef.docs[0].data();
                                    emails.push(user.email);
                                }).catch(err => {
                                    console.log(err);
                                });
                        });
                        resolve(emails);
                    } else {
                        resolve(emails);
                    }
                }).catch(err => {
                    reject(err);
                });
        });
    },

    /**
     * Get Users by article ID section start
     * 
     */
    awaitGetAllUsersByArticleId({ commit }, payload) {
        return new Promise((resolve, reject) => {
            let results = store.dispatch("getAllUsersByArticleId", payload);
            results.then(result => {
                let finalUsersArr = [];
                result.forEach(userResult => {
                    if (Object.keys(userResult).length > 0) {
                        finalUsersArr.push(userResult);
                    }
                });
                resolve(finalUsersArr);
            })
        });
    },

    // Get all users by article id
    getAllUsersByArticleId({ commit }, payload) {
        return new Promise((resolve, reject) => {
            let users = [];
            let finalUsersResult = [];
            const promises = [];
            userDependentNoteCollection
                .where("article_id", "==", payload.id)
                .get()
                .then(docRef => {
                    docRef.docs.forEach(doc => {
                        let articleNote = doc.data();
                        if (!users.includes(articleNote.user_id)) {
                            // check admin or not
                            let userDetails = store.dispatch("getUsersWithoutAdmin", articleNote);
                            promises.push(userDetails);
                        }
                        users.push(articleNote.user_id);
                    });
                    resolve(Promise.all(promises));
                }).catch(err => {
                    reject(err);
                });
        });
    },

    // Get users without admin
    getUsersWithoutAdmin({ commit }, payload) {
        return new Promise((resolve, reject) => {
            groupUserRelationCollection
                .where("is_admin", "==", 0)
                .where("user_id", "==", payload.user_id)
                .get()
                .then(userDocRef => {
                    if (userDocRef.docs.length > 0) {
                        usersCollection
                            .where("user_authenticate_id", "==", payload.user_id)
                            .get()
                            .then(userDoc => {
                                let userResult = userDoc.docs[0].data();
                                console.log(userResult);
                                resolve(userResult);
                            }).catch(err => {
                                reject(err);
                            });
                    } else {
                        resolve({});
                    }
                }).catch(err => {
                    reject(err);
                });
        });
    },

    // Get admin user information
    getGroupAdminUserRecord({ commit }, payload) {
        return new Promise((resolve, reject) => {
            groupUserRelationCollection
                .where("is_admin", "==", 1)
                .where("group_id", "==", payload.groupId)
                .get()
                .then(docRef => {
                    let adminNotes = {
                        name: "",
                        notes: []
                    };
                    let groupAdminInfo = docRef.docs[0].data();
                    usersCollection
                        .where("user_authenticate_id", "==", groupAdminInfo.user_id)
                        .get()
                        .then(adminDocRef => {
                            let adminDoc = adminDocRef.docs[0].data();
                            userDependentNoteCollection
                                .where("article_id", "==", payload.id)
                                .where("user_id", "==", groupAdminInfo.user_id)
                                .get()
                                .then(noteDocRef => {
                                    let adminUserNotes = [];
                                    noteDocRef.docs.forEach(doc => {
                                        let resultData = doc.data();
                                        adminUserNotes.push({
                                            id: doc.id,
                                            article_id: resultData.article_id,
                                            selected_note: resultData.selected_note,
                                            user_custom_note: resultData.user_custom_note,
                                            selected_figure: resultData.selected_figure,
                                            selected_figure_title: resultData.selected_figure_title,
                                            user_custom_figure_note: resultData.user_custom_figure_note,
                                            toggleStatus: false,
                                            toggleClass: "img-desc-hidden img-title",
                                            user_id: resultData.user_id,
                                            isShowCommentTextbox: resultData.user_custom_note ?
                                                true : false
                                        });
                                    });
                                    adminNotes.name = adminDoc.name;
                                    adminNotes.notes = adminUserNotes;
                                    resolve(adminNotes);
                                }).catch(err => {
                                    reject(err);
                                });
                        }).catch(err => {
                            reject(err);
                        });
                }).catch(err => {
                    reject(err);
                });
        });
    },

    /**
     * Get Users by article ID section end
     * 
     */

    /*
     * Get single user article notes
     */
    getSingleUserNotesRecord({ commit }, payload) {
        return new Promise((resolve, reject) => {
            usersCollection
                .where("user_authenticate_id", "==", payload.userId)
                .get()
                .then(userDocRef => {
                    let userNotes = {
                        name: "",
                        notes: []
                    };
                    let userDoc = userDocRef.docs[0].data();
                    userDependentNoteCollection
                        .where("article_id", "==", payload.id)
                        .where("user_id", "==", payload.userId)
                        .get()
                        .then(noteDocRef => {
                            let userNotesRecord = [];
                            noteDocRef.docs.forEach(doc => {
                                let resultData = doc.data();
                                userNotesRecord.push({
                                    id: doc.id,
                                    article_id: resultData.article_id,
                                    selected_note: resultData.selected_note,
                                    user_custom_note: resultData.user_custom_note,
                                    selected_figure: resultData.selected_figure,
                                    selected_figure_title: resultData.selected_figure_title,
                                    user_custom_figure_note: resultData.user_custom_figure_note,
                                    toggleStatus: false,
                                    toggleClass: "img-desc-hidden img-title",
                                    user_id: resultData.user_id,
                                    isShowCommentTextbox: resultData.user_custom_note ?
                                        true : false
                                });
                                userNotes.name = userDoc.name;
                                userNotes.notes = userNotesRecord;
                                resolve(userNotes);
                            });
                        }).catch(err => {
                            reject(err);
                        });
                }).catch(err => {
                    reject(err);
                });
        });
    }
};

export default {
    state,
    mutations,
    actions,
    getters
};