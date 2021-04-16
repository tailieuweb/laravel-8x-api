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
                                    <h3>Thông tin tuyển sinh TDC</h3>
                                    <p>Tin tức</p>
                                    <p>Ngành học tại TDC</p>
                                    <p>Lý do chọn TDC</p>
                                    <p>Cơ hội việc làm</p>
                                    <p>Trắc nghiệm định hướng nghề nghiệp</p>
                                    <p>Một số câu hỏi thường gặp</p>
                                </article>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-12">


                                <section class="events flexslider" style="height: 458px;">
                                    <h3>Thông báo - Tin tức</h3>
                                    <ul class="swiper-container content-list">
                                         <div class="swiper-wrapper">
                                             <?php for ($i = 0; $i < $products->count(); $i++): ?>
                                             <div class="swiper-slide">
                                                 <li >
                                                     <?php for ($j = $i; ($j < $products->count()) && ($j < $i+3); $j++): ?>
                                                     <article>
                                                         <span class="date">{{ $products[$j]->created_at->format('d') }}<span>{{ $products[$j]->created_at->format('m') }}-{{ $products[$j]->created_at->format('Y') }}</span></span>
                                                         <h3><a href="{!! URL::route('detail', [   'id' => $products[$j]->post_id]) !!}"><?php echo $products[$j]->post_name; ?></a></h3>
                                                         <p><?php echo $products[$j]->post_overview; ?></p>
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
