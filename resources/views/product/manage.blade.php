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
                                        <h5>Upcoming Courses</h5>
                                        <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu blandit diam, at faucibus mi ante vel augue.</p>

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
                                <table class="table table-responsive table-striped">
                                    <thead>

                                        <tr class="filters">
                                            <th><input type="text" class="form-control" placeholder="Id" disabled=""></th>
                                            <th><input type="text" class="form-control" placeholder="Name" disabled=""></th>
                                            <th><input type="text" class="form-control" placeholder="Email" disabled=""></th>
                                            <th><input type="text" class="form-control" placeholder="Token" disabled=""></th>
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