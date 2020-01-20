import React, { Component } from 'react';
import './Header.css';
import companylogo from './images/companylogo.png';

class Header extends Component {
    render() {
        return (
            <header className="header-content">
                <div className="header-content-body">
                    <div className="company-logo">
                        <a href="#"><img src={companylogo} alt="companylogo" /></a>
                    </div>
                    <div className="main-menu">
                        <ul>
                            <li><a  href="#">Home</a></li>
                            <li><a  href="#">Serives</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        )
    }

}

export default Header;




