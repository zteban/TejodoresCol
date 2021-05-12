
@extends('layouts.plantilla')
@section ('title','tejedor1'.$Tejedor)
@section('content')


<div class="main-content" id="main-content">
    
    <main class="mainPrincipal">
        <h2 class="dash-title">Overview</h2>
        <div class="dash-cards">
        <div class="card-single">
                <div class="card-body">
                    <span class = "ti-briefcase"></span>
                    <div>
                        <h5>Acount Balance</h5>
                        <label><input type="checkbox" id="sidebar-toggle" > Este es mi primer checkbox</label><br>
                        
                    
                        <h4>$30,659.45</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View All</a>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class = "ti-reload"></span>
                    <div>
                        <h5>Pending</h5>
                        <h4>$19,500.45</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View All</a>
                </div>
            </div>

            <div class="card-single">
                <div class="card-body">
                    <span class = "ti-reload"></span>
                    <div>
                        <h5>Processed</h5>
                        <h4>$20,500.45</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View All</a>
                </div>        
            </div>
        </div>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Team</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>App Development</td>
                                <td>15 Aug,2020</td>
                                <td>22 Aug, 2020</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Front-end Design</td>
                                <td>15 Aug, 2020</td>
                                <td>22 Aug, 2020</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge warning">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>App Development</td>
                                <td>15 Aug,2020</td>
                                <td>22 Aug, 2020</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>App Development</td>
                                <td>15 Aug,2020</td>
                                <td>22 Aug, 2020</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge warning">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>App Development</td>
                                <td>15 Aug,2020</td>
                                <td>22 Aug, 2020</td>
                                <td class="td-team">
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="summary">
                    <div class="summary-card">
                        <div class="summary-single">
                            <span class="ti-id-badge"></span>
                            <div>
                                <h5>196</h5>
                                <small>Number of staff</small>
                            </div>
                        </div>
                        <div class="summary-single">
                            <span class="ti-calendar"></span>
                            <div>
                                <h5>196</h5>
                                <small>Number of leave</small>
                            </div>
                        </div>
                        <div class="summary-single">
                            <span class="ti-face-smile"></span>
                            <div>
                                <h5>196</h5>
                                <small>Profile update request</small>
                            </div>
                        </div>
                    </div>
                    <div class="bday-card">
                        <div class="bday-flex">
                            <div class="bday-img"></div>
                            <div class="bday-info">
                                <h5>Dwayne f. Sanders</h5>
                                <small>Birthday Today</small>
                            </div>
                        </div>
                        <div class="text-center">
                            <button>
                                <span class="ti-gift"></span>
                                Wish him
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@endsection
