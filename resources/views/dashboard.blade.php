@extends('layouts.dashboardlayout')

@section('content')
<div class="card" id="announcement-1">
                                <div class="card-body">
                                    <div class="announcement-header">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h2 class="card-title-announcements">Christmas Party</h2>
                                                </div>
                                                <div class="col-3">
                                                    <p class="ann-date-posted">August 15, 2022 | 5:00 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ URL('https://viterbischool.usc.edu/wp-content/uploads/2020/05/Lily-Profile-Square.jpeg') }}"
                                                class="announcer-photo">
                                            </div>
                                            <div class="col-9">
                                                <p class="announcer-name">Rachel Chiu | Manager (Marketing Department)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="announcement-body">
                                            <div class="row">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-11">
                                                    <p class="announcement-text">
                                                        We will be having a meeting later at 10 am to discuss the newest products in the market.
                                                    </p>
                                                    <button type="button" class="btn" id="see-more" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        see more
                                                    </button>
                                                    <!-- <a class="see-more" data-bs-toggle="modal" data-bs-target="#myModal">see more</a> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" id="announcement-2">
                                <div class="card-body">
                                    <div class="announcement-header">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h2 class="card-title-announcements">URGENT MEETING</h2>
                                                </div>
                                                <div class="col-3">
                                                    <p class="ann-date-posted">August 15, 2022 | 5:00 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ URL('https://profilemagazine.com/wp-content/uploads/2020/04/Ajmere-Dale-Square-thumbnail.jpg') }}"
                                                class="announcer-photo">
                                            </div>
                                            <div class="col-9">
                                                <p class="announcer-name">Jonathan Ramos | Manager (Finance Department)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="announcement-body">
                                            <div class="row">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-11">
                                                    <p class="announcement-text">
                                                        We will be having a meeting later to talk about our sales.
                                                    </p>
                                                    <button type="button" class="btn" id="see-more" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        see more
                                                    </button>
                                                    <!-- <a class="see-more" data-bs-toggle="modal" data-bs-target="#myModal">see more</a> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="announcement-3">
                                <div class="card-body">
                                    <div class="announcement-header">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h2 class="card-title-announcements">Christmas Party</h2>
                                                </div>
                                                <div class="col-3">
                                                    <p class="ann-date-posted">August 15, 2022 | 5:00 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ URL('https://i.pinimg.com/736x/54/74/8d/54748de2a9fa0951d2e81b1ffbbd189c.jpg') }}"
                                                class="announcer-photo">
                                            </div>
                                            <div class="col-9">
                                                <p class="announcer-name">Elizabeth Ignacio | Manager (Marketing Department)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="announcement-body">
                                            <div class="row">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-11">
                                                    <p class="announcement-text">
                                                        Good day everyone!<br>
                                                        Meeting tomorrow at 1PM. We will talk about our Christmas Party
                                                    </p>
                                                    <button type="button" class="btn" id="see-more" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        see more
                                                    </button>
                                                    <!-- <a class="see-more" data-bs-toggle="modal" data-bs-target="#myModal">see more</a> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
@endsection