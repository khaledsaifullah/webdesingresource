import React, { Component } from 'react';
import './Header.css';
import companylogo from './images/companylogo.png';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";


class Header extends Component {
    render() {
        return (
            <header className="header-content">
                <div className="header-content-body">
                    <div className="company-logo">
                        <Router>
                            <Link to="/"><img src={companylogo} alt="companylogo" /></Link>
                        </Router>
                    </div>
                </div>
            </header>
        )
    }

}

export default Header;




