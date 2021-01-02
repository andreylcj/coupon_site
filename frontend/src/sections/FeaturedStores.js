import React from 'react'

function FeaturedStores(props) {
    return (
        <div className="featured-header-container">
            {/* APPEAR ONLY ON CELL
            <button className="featuredHeader-step js-stepIcon" aria-hidden="true">
                    <svg className="u-arrow-icon" viewBox="0 0 54 54">
                        <use crossOrigin="anonymous" xlink:href="/icons/icons.svg#arrow-icon"></use>
                </svg> 
            </button> 
            */}
            <FeaturedStoresList stores={props.featuredStores} />
            
            <div className="featured-header-indicator"></div>
        </div>
    )
}

function FeaturedStoresList(props) {
    
    const stores = props.stores;   
    
    return (
        <ul className="featured-header-list"> 
            {
                stores.map((store)=> (
                    <li key={store._id} className="featured-item">
                        <a 
                            href={`/store/${store._id}`} 
                            title={`Cupons de desconto de ${store.nicename}`}
                            className="featuredItem-block"
                            data-event="Featured-Stores" 
                            data-action="Go-Store-Page" 
                            data-label={store.nicename}
                        >
                            <picture className="featured-item-logo">
                                {
                                    store.images.map((image, subIndex) => (
                                        image.max_width ?
                                        ( <source 
                                            key={subIndex}
                                            width={image.width} 
                                            height={image.height} 
                                            media={`(max-width: ${image.max_width}px)`}                                           
                                            crossOrigin="anonymous" 
                                            srcSet={image.srcset}
                                        /> ) :
                                        ( <source 
                                            key={subIndex}
                                            width={image.width} 
                                            height={image.height}                                          
                                            crossOrigin="anonymous" 
                                            srcSet={image.srcset}
                                        /> )
                                   ))
                                }                     
                                <img 
                                    width={store.images[store.images.length - 1].width}
                                    height={store.images[store.images.length - 1].height}
                                    crossOrigin="anonymous" 
                                    src={store.images[store.images.length - 1].srcset} 
                                    alt={`Logo da loja ${store.nicename}`}
                                />
                            </picture>
                            <div className="featured-item-info">
                                <span className="featuredItem-coupons">{`${store.coupons} cupons +`}</span>
                                <span className="featuredItem-cashback">{`${store.coupons} % de cashback`}</span>
                            </div>
                        </a>
                    </li>  
                ))
            }            
        </ul>  
    )
}

export default FeaturedStores