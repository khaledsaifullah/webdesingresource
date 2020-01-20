import React, { Component } from 'react';
import './App.css';
import Header from './components/header/Header.js';
import Home from './components/home/Home.js';
import Footer from './components/footer/Footer.js';


class App extends Component {
  render() {

    return (
        <div className="App">
            <Header />
            <Home />
            <Footer />
        </div>
    )

  }

}

export default App;
