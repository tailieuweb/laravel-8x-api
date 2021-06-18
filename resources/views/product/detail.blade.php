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

                                    <h5><b> Nhóm:</b>{!! $category !!}</h5>
                                    <h4>Tiêu đề: {!! $product->post_name !!}</h4>

                                    <p>Nội dung: <br>{!! $product->post_description !!}</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
