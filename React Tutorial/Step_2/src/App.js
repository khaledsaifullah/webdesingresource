import React, { Component } from 'react';
import './App.css';
import Header from './components/header/Header.js';
import Footer from './components/footer/Footer.js';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

import Home from './components/home/Home.js';
import About from './components/about/About.js';
import Contact from './components/contact/Contact.js';



class App extends Component {
  render() {

    return (
        <div className="App">
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
                          <Link to="/contact">Contact</Link>
                          </li>
                      </ul>
                     </div>
                     <Route path="/" exact component={Home} />
                     <Route path="/about/" component={About} />
                     <Route path="/contact/" component={Contact} />
          </Router>

              
            <Footer />
        </div>
    )

  }

}



export default App;
