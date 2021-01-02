import React from 'react';
import LogoSquare from '../snnipets/LogoSquare';

function FeaturedStores(props) {
    const stores = props.featuredStores;
    return (
        <div className="featured-header-container">
            {/* APPEAR ONLY ON CELL
            <button className="featuredHeader-step js-stepIcon" aria-hidden="true">
                    <svg className="u-arrow-icon" viewBox="0 0 54 54">
                        <use crossOrigin="anonymous" xlink:href="/icons/icons.svg#arrow-icon"></use>
                </svg> 
            </button> 
            */}
            <ul className="list">
                {stores.map((store) => (
                    <LogoSquare store={store} />
                ))}
            </ul>
            <div className="featured-header-indicator"></div>
        </div>
    )
}

export default FeaturedStores