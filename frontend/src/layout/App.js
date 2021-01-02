import React from 'react';
import Header from '../sections/Header';
import data from '../data.js';
import FeaturedStores from '../sections/FeaturedStores';
import GeneralFeaturedCoupons from '../sections/GeneralFeaturedCoupons';

function App() {
  return (
    <div className={`App ${data.class}`}>
    
      <Header />

      <section id="featured" className="featured-stores">
        <div className="container">
          <h1 className="title">Cupons e cashback em 2.000 lojas</h1>
          <h2 className="subtitle">Economize na sua compra usando os melhores Cupons de Desconto e Cashback!</h2>
          
          <FeaturedStores featuredStores={data.featuredStores}/>

        </div>
      </section >

      <GeneralFeaturedCoupons generalFeaturedCoupons={data.generalFeaturedCoupons}/>
          
    </div>
  );
}

export default App;
