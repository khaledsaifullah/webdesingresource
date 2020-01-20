import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import {Helmet} from "react-helmet";
import './Contact.css';

class Contact extends Component {
    render() {
        return (
            <div>
            <Helmet>
                <title>Contact Page</title>
                <meta name="description" content="Contact react helmet" />
                <meta name="keywords" content="react,seo,helmet" />
            </Helmet>
                
                <h2>This is Contact Page</h2>
                <div>Contact Body Section here</div>
            </div>
        )
    }

}

export default Contact;




