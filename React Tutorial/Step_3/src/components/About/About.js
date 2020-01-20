import React, { Component } from 'react';
import {Helmet} from "react-helmet";
import './About.css';

class About extends Component {
    render() {
        return (
            <div>
            <Helmet>
                <title>About Page</title>
                <meta name="description" content="About react helmet" />
                <meta name="keywords" content="react,seo,helmet" />
            </Helmet>

                
            <h2>This is About Page</h2>
                <div>About Body Section here</div>
            </div>
        )
    }

}

export default About;




