import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import {Helmet} from "react-helmet";
import './Gallery.css';

import pictureone from './images/pictureone.png';
import picturetwo from './images/picturetwo.png';




class Gallery extends Component {
   
    render() {
        return (
            <div className="container">
            <Helmet>
                <title>Gallery Page</title>
                <meta name="description" content="Gallery react helmet" />
                <meta name="keywords" content="react,seo,helmet" />
            </Helmet>
                
                <h2>This is Gllery Page</h2>
                <div>Gallery Body Section here</div>
                <div className="gallery-list">
                <Router>
                      <Link to="/gallery/pictureone" className="thumbnail-picture"><img src={pictureone} alt="pictureone" /></Link>
                      <Link to="/gallery/picturetwo" className="thumbnail-picture"><img src={picturetwo} alt="picturetwo" /></Link>

                      <Route path="/gallery/pictureone/" exact component={pictureOne} />
                      <Route path="/gallery/picturetwo/" exact component={pictureTwo} />
                </Router>
                </div>
            </div>
        )
    }

}

class pictureOne extends Gallery{
    render() {
        return (
            <div className="popupbox">
                <Link to="/gallery/" className="popup-close">Close</Link>
                <img src={pictureone} alt="pictureone" />
                <h4 className="caption">Picture One</h4>
            </div>  
        )
    }
}

class pictureTwo extends Gallery{
    render() {
        return (
            <div className="popupbox">
                <Link to="/gallery/" className="popup-close">Close</Link>
                <img src={picturetwo} alt="picturetwo" />
                <h4 className="caption">Picture Two</h4>
            </div>
        )
    }
}




export default Gallery;




