import axios from "axios";
import React from 'react';
import { useEffect } from "react";

const Home = () => {
    const [data, setData] = React.useState([]);

    useEffect(() => {
        const response = axios.get('/api/items')
        response.then(res => {
            setData(res.data.items);
        }).catch(err => {
            console.log(err)
        })
    }, []);

    return (
        <div>
            {
                data.map(item => (
                    <div key={item.id}>
                        <p>{item.name}</p>
                    </div>  
                ))
            }
        </div>
    );
};

export default Home;
