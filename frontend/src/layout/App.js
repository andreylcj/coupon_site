import React from 'react';
import Header from '../sections/Header';
import data from '../data.js';
import FeaturedStores from '../sections/FeaturedStores';


function App() {
  return (
    <div className="App">
    
      <Header />

      <section id="featured" className="featured-header">
        <div className="container">
          <h1 className="featured-header-title">Cupons e cashback em 2.000 lojas</h1>
          <h2 className="featured-header-subtitle">Economize na sua compra usando os melhores Cupons de Desconto e Cashback!</h2>
          
          <FeaturedStores featuredStores={data.featuredStores}/>

        </div>
      </section >
    </div>
  );
}

export default App;
