@extends('product.layout')

@section('title', 'List of products')

@section('content')
<div class="type-91">
            <div class="container college-box">
                <div class="course-events">
                    <div class="wrapper clearfix">
                        <div class="row no-margin">
                            <div class="our-college-sidebar col-4 col-md-4 col-sm-12 col-xs-12">
                                <article>
                                    <h3>Library</h3>
                                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an</p>
                                    <a href="#">See more</a>
                                </article>

                                <article>
                                    <h3>Online course</h3>
                                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei. Saepe tantas ocurreret duo ea, has facilisi vulputate an</p>
                                    <a href="#">See more</a>
                                </article>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-12">


                                <section class="events flexslider" style="height: 458px;">
                                    <h3>Products</h3>
                                    <ul class="swiper-container content-list">
                                         <div class="swiper-wrapper">
                                             <?php for ($i = 0; $i < $products->count(); $i++): ?>
                                             <div class="swiper-slide">
                                                 <li >
                                                     <?php for ($j = $i; ($j < $products->count()) && ($j < $i+3); $j++): ?>
                                                     <article>			
                                                         <span class="date">28<span>Wed 2015</span></span>
                                                         <h3><a href="#"><?php echo $products[$j]->name; ?></a></h3>
                                                         <p><?php echo $products[$j]->detail; ?></p>
                                                     </article>
                                                     <?php endfor; ?>
                                                 </li>
                                             </div>
                                                 <?php $i = $i+ 2; ?>
                                             <?php endfor; ?>
                                       
                                         
                                        </div>	
                                        				

                                    </ul>
        
                                    <ul class="flex-direction-nav"><li><a href="#" class="flex-prev">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection