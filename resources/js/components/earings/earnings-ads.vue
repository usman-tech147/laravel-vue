<template>
    <main id="at-main" class="at-main at-haslayout">
        <div class="at-artistholder">
            <div class="at-content">
                <div class="at-pagehead">
                    <div class="at-pagetitle">
                        <h2>earnings</h2>
                    </div>
                </div>
                <div class="at-earnings">
                    <div class="at-stats">
                        <ul>
                            <li>
                                <div class="at-stat">
                                    <span>yesterday</span>
                                    <h3>$ 10.5</h3>
                                </div>
                            </li>
                            <li>
                                <div class="at-stat">
                                    <span>yesterday</span>
                                    <h3>$ 10.5</h3>
                                    <div class="at-statcontent">
                                        <span>+$ 11.34 (+4%)</span>
                                        <em>vs previous 7 days</em>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="at-stat">
                                    <span>yesterday</span>
                                    <h3>$ 10.5</h3>
                                    <div class="at-statcontent">
                                        <span>+$ 11.34 (+4%)</span>
                                        <em>vs previous 7 days</em>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="at-stat">
                                    <span>yesterday</span>
                                    <h3>$ 10.5</h3>
                                    <div class="at-statcontent">
                                        <span>+$ 11.34 (+4%)</span>
                                        <em>vs previous 7 days</em>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="at-balance">
                            <li>
                                <div class="at-stat">
                                    <span>yesterday</span>
                                    <h3>$ 10.5</h3>
                                    <div class="at-statcontent">
                                        <span>+$ 11.34 (+4%)</span>
                                        <em>vs previous 7 days</em>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="at-balancechartarea">
                        <div class="at-charthead">
                            <div class="at-charttitle">
                                <h4>This week Balance: $ 318.2</h4>
                            </div>
                            <div class="at-chartdropdown">
                                <div class="dropdown show">
                                    <a class="at-btnchartdropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>this week</span>
                                        <i class="icon-arrow-icon"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="at-balancechart" class="at-balancechart"></div>
                    </div>
                </div>
                <div class="at-adscontentholder">
                    <div class="at-pagehead">
                        <div class="at-pagetitle">
                            <h2>ads</h2>
                        </div>
                        <div class="at-pageheadrrightarea">
                            <a href="ads.html" class="at-btn">
                                <i class="icon-add"></i>
                                <span>add new ads</span>
                            </a>
                        </div>
                    </div>
                    <div class="at-adscontent">
                        <ul class="nav nav-tabs at-adstab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active at-adstablink" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">custom ads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">google ads</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="at-adstable">
                                    <table class="at-tabletheme">
                                        <thead>
                                        <tr>
                                            <th>title</th>
                                            <th>views</th>
                                            <th>clicks</th>
                                            <th>status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
														<span class="at-customaddsign">
															<i class="icon-symbol"></i>
														</span>
                                                <em>Lorem ipsum dolor sit amet, Consetetur sadipscing elitr</em>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="at-customaddsign">
															<i class="icon-symbol"></i>
														</span>
                                                <em>Lorem ipsum dolor sit amet, Consetetur sadipscing elitr</em>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="at-customaddsign">
															<i class="icon-symbol"></i>
														</span>
                                                <em>Lorem ipsum dolor sit amet, Consetetur sadipscing elitr</em>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>active</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="at-adstable">
                                    <table class="at-tabletheme">
                                        <thead>
                                        <tr>
                                            <th>title</th>
                                            <th>views</th>
                                            <th>clicks</th>
                                            <th>earning</th>
                                            <th>status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
														<span class="at-addgoogle">
															<i class="icon-google-g-icon"></i>
														</span>
                                                <em>Lorem ipsum dolor sit amet, Consetetur sadipscing elitr</em>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>$ 2.8</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="at-addgoogle">
															<i class="icon-google-g-icon"></i>
														</span>
                                                <em>Lorem ipsum dolor sit amet, Consetetur sadipscing elitr</em>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>$ 2.8</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="at-addgoogle">
															<i class="icon-google-g-icon"></i>
														</span>
                                                <em>Lorem ipsum dolor sit amet, Consetetur sadipscing elitr</em>
                                            </td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>$ 2.8</td>
                                            <td>active</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
