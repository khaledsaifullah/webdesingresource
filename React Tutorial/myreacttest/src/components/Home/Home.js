import React, { Component } from 'react';
import './Home.css';
import Spinner from 'react-bootstrap/Spinner';
import Carousel from 'react-bootstrap/Carousel';

import bannerone from './images/banner-1.jpg';
import bannertwo from './images/banner-2.jpg';
import bannerthree from './images/banner-3.jpg';



class Home extends Component {
    
    constructor() {
        super()

        this.state={
            banner:[]
        }
        
        fetch('http://localhost:9000/banner').then(res => res.json()).then(data => {
            this.setState({banner: data})
            console.log(this.state.banner)
        })
    }

    renderImage = () => {
        return this.state.banner.map(img => {
            return(
                <Carousel.Item>
                <img className="d-block w-100" src={'http://localhost:9000/images/' + img.picture}     alt="First slide"       />
                </Carousel.Item>
            )
        })
    }

    render() {
        
        return (
            <div>
            <Carousel>
                {this.renderImage()}
            </Carousel>
            <div className="home-slider">

  
        
        </div>
            <div className="container">
                <br /><br /><br />
                <h2>This is Home Page111</h2>
                <div>Home Body Section here</div>
                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
            </div>
            </div>
        )
    }




}

export default Home;




