@extends('product.layout')

@section('title', 'List of products')

@section('content')
<div class="type-61">
            <div>
                <div class="container">

               	    <div class="row">
                        <aside class="col-lg-3 col-md-4 col-sm-4">
                            <div class="box_style_1">
                                <div id="sensei_course_categories-3" class="widget widget_sensei_course_categories">
                                    <h4>Users</h4>
                                    <ul>	
                                        <li><a href="#">List</a>
                                        </li>
                                        <li><a href="#">Add new</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="text-7" class="widget">		
                                    <div>
                                        <hr>
                                        <h5>Thành viên sử dụng key để tương tác</h5>
                                    </div>
                                </div>          
                            </div>
                        </aside>
                        <div class="col-lg-9 col-md-8 col-sm-8">

                            <div class="panel panel-info filterable add_bottom_45">
                                <div class="panel-heading">
                                    <h3 class="panel-title">List of users</h3>
                                    <div class="pull-right">
                                        <button class="btn-filter"><i class="fa fa-bars" aria-hidden="true"></i> Filter</button>
                                    </div>
                                </div>
                                <table class="table table-responsive table-striped" style="display: block">
                                    <thead>

                                        <tr class="filters">
                                            <th>
                                                <span  class="">Id</span>
                                            </th>
                                            <th>
                                                <span  class="">Name</span>
                                            </th>
                                            <th>
                                                <span  class="">Email</span>
                                            </th>
                                            <th>
                                                <span  class="">Key</span>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php foreach ($accounts as $account): ?>
                                        <tr>
                                            <td><?php echo $account['id']; ?></td>
                                            <td><?php echo $account['name']; ?></td>
                                            <td><?php echo $account['email']; ?></td>
                                            <td class="ow"><?php echo $account['secret']['token']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection