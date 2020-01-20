import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import {Helmet} from "react-helmet";
import './Contact.css';

import 'bootstrap/dist/css/bootstrap.min.css';
import Breadcrumb from 'react-bootstrap/Breadcrumb';

import {Form, FormGroup, ControlLabel,Button , HelpBlock, FormControl} from 'react-bootstrap';




class Contact extends Component {
    render() {
        return (
            <div className="container">
            <Helmet>
                <title>Contact Page</title>
                <meta name="description" content="Contact react helmet" />
                <meta name="keywords" content="react,seo,helmet" />
            </Helmet>
                
                <h2>This is Contact Page11</h2>
                <div>Contact Body Section here</div>
                <Breadcrumb>
                <Breadcrumb.Item href="#">Home</Breadcrumb.Item>
                    <Breadcrumb.Item href="https://getbootstrap.com/docs/4.0/components/breadcrumb/">
                    Library
                    </Breadcrumb.Item>
                    <Breadcrumb.Item active>Data</Breadcrumb.Item>
                </Breadcrumb>


        <div className="form-box">
            <Form>
                <Form.Group controlId="formBasicEmail">
                    <Form.Label>Email address</Form.Label>
                <Form.Control type="email" placeholder="Enter email" />
                    <Form.Text className="text-muted">
                    We'll never share your email with anyone else.
                </Form.Text>
                </Form.Group>

                <Form.Group controlId="formBasicPassword">
                    <Form.Label>Password</Form.Label>
                    <Form.Control type="password" placeholder="Password" />
                    </Form.Group>
                    <Form.Group controlId="formBasicCheckbox">
                    <Form.Check type="checkbox" label="Check me out" />
                    </Form.Group>
                    <Button variant="primary" type="submit">
                    Submit
                    </Button>
            </Form>

</div>






            </div>
        )
    }

}

export default Contact;




