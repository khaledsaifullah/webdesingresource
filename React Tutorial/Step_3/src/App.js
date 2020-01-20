import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import {Helmet} from "react-helmet";

import './App.css';
import Header from './components/Header/Header.js';
import Footer from './components/Footer/Footer.js';


import Home from './components/Home/Home.js';
import About from './components/About/About.js';
import Gallery from './components/Gallery/Gallery.js';
import Contact from './components/Contact/Contact.js';


class App extends Component {
  render() {

    return (
        <div className="App">
          <Helmet>
              <title>Home Page</title>
              <meta name="description" content="Home react helmet" />
                <meta name="keywords" content="react,seo,helmet" />
          </Helmet>
              
            <Header />

            <Router>
                    <div className="main-menu">
                      <ul>
                          <li>
                          <Link to="/">Home</Link>
                          </li>
                          <li>
                          <Link to="/about/">About</Link>
                          </li>
                          <li>
                          <Link to="/gallery/">Gallery</Link>
                          </li>
                          <li>
                          <Link to="/contact">Contact</Link>
                          </li>
                      </ul>
                     </div>
                     <div className="main-content">
                         <Route path="/" exact component={Home} />
                         <Route path="/about/" component={About} />
                         <Route path="/gallery/" component={Gallery} />
                         <Route path="/contact/" component={Contact} />
                    </div>
          </Router>

              
            <Footer />
        </div>
    )

  }

}



export default App;
