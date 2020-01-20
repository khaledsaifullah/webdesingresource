import React, { Component } from 'react';
import {Helmet} from "react-helmet";
import './About.css';

import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button'
import Accordion from 'react-bootstrap/Accordion';
import ProgressBar from 'react-bootstrap/ProgressBar';


class About extends Component {
    render() {
        return (
            <div className="container">
            <Helmet>
                <title>About Page</title>
                <meta name="description" content="About react helmet" />
                <meta name="keywords" content="react,seo,helmet" />
            </Helmet>
            <h2>This is About Page</h2>
            <div>About Body Section here</div>

            <div className="accordion-content">
                        <Accordion>
                        <Card>
                        <Card.Header>
                        <Accordion.Toggle as={Button} variant="link" eventKey="0">
                            Click me!
                        </Accordion.Toggle>
                        </Card.Header>
                        <Accordion.Collapse eventKey="0">
                            <Card.Body>Hello! I'm the body</Card.Body>
                        </Accordion.Collapse>
                        </Card>
                        <Card>
                        <Card.Header>
                        <Accordion.Toggle as={Button} variant="link" eventKey="1">
                            Click me!
                        </Accordion.Toggle>
                        </Card.Header>
                        <Accordion.Collapse eventKey="1">
                            <Card.Body>Hello! I'm another body</Card.Body>
                        </Accordion.Collapse>
                        </Card>
                        </Accordion>

            </div>



            <ProgressBar>
                <ProgressBar striped variant="success" now={35} key={1} />
                <ProgressBar variant="warning" now={20} key={2} />
                <ProgressBar striped variant="danger" now={10} key={3} />
            </ProgressBar>


    




            </div>
        )
    }

}

export default About;




