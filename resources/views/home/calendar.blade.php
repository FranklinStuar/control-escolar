@extends('layouts.app')

@section('title')
    Administrador
@endsection

@section('content')
 <!-- Card END -->
 <div class="row">
        <!-- Your Profile Views Chart -->
        <div class="col-lg-8 m-b30">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Your Profile Views</h4>
                </div>
                <div class="widget-inner">
                    <canvas id="chart" width="100" height="45"></canvas>
                </div>
            </div>
        </div>
        <!-- Your Profile Views Chart END-->
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Notifications</h4>
                </div>
                <div class="widget-inner">
                    <div class="noti-box-list">
                        <ul>
                            <li>
                                <span class="notification-icon dashbg-gray">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="notification-text">
                                    <span>Sneha Jogi</span> sent you a message.
                                </span>
                                <span class="notification-time">
                                    <a href="#" class="fa fa-close"></a>
                                    <span> 02:14</span>
                                </span>
                            </li>
                            <li>
                                <span class="notification-icon dashbg-yellow">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                                <span class="notification-text">
                                    <a href="#">Your order is placed</a> sent you a message.
                                </span>
                                <span class="notification-time">
                                    <a href="#" class="fa fa-close"></a>
                                    <span> 7 Min</span>
                                </span>
                            </li>
                            <li>
                                <span class="notification-icon dashbg-red">
                                    <i class="fa fa-bullhorn"></i>
                                </span>
                                <span class="notification-text">
                                    <span>Your item is shipped</span> sent you a message.
                                </span>
                                <span class="notification-time">
                                    <a href="#" class="fa fa-close"></a>
                                    <span> 2 May</span>
                                </span>
                            </li>
                            <li>
                                <span class="notification-icon dashbg-green">
                                    <i class="fa fa-comments-o"></i>
                                </span>
                                <span class="notification-text">
                                    <a href="#">Sneha Jogi</a> sent you a message.
                                </span>
                                <span class="notification-time">
                                    <a href="#" class="fa fa-close"></a>
                                    <span> 14 July</span>
                                </span>
                            </li>
                            <li>
                                <span class="notification-icon dashbg-primary">
                                    <i class="fa fa-file-word-o"></i>
                                </span>
                                <span class="notification-text">
                                    <span>Sneha Jogi</span> sent you a message.
                                </span>
                                <span class="notification-time">
                                    <a href="#" class="fa fa-close"></a>
                                    <span> 15 Min</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 m-b30">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>New Users</h4>
                </div>
                <div class="widget-inner">
                    <div class="new-user-list">
                        <ul>
                            <li>
                                <span class="new-users-pic">
                                    <img src="{{url('admin/images/testimonials/pic1.jpg')}}" alt=""/>
                                </span>
                                <span class="new-users-text">
                                    <a href="#" class="new-users-name">Anna Strong </a>
                                    <span class="new-users-info">Visual Designer,Google Inc </span>
                                </span>
                                <span class="new-users-btn">
                                    <a href="#" class="btn button-sm outline">Follow</a>
                                </span>
                            </li>
                            <li>
                                <span class="new-users-pic">
                                    <img src="{{url('admin/images/testimonials/pic2.jpg')}}" alt=""/>
                                </span>
                                <span class="new-users-text">
                                    <a href="#" class="new-users-name"> Milano Esco </a>
                                    <span class="new-users-info">Product Designer, Apple Inc </span>
                                </span>
                                <span class="new-users-btn">
                                    <a href="#" class="btn button-sm outline">Follow</a>
                                </span>
                            </li>
                            <li>
                                <span class="new-users-pic">
                                    <img src="{{url('admin/images/testimonials/pic1.jpg')}}" alt=""/>
                                </span>
                                <span class="new-users-text">
                                    <a href="#" class="new-users-name">Nick Bold  </a>
                                    <span class="new-users-info">Web Developer, Facebook Inc </span>
                                </span>
                                <span class="new-users-btn">
                                    <a href="#" class="btn button-sm outline">Follow</a>
                                </span>
                            </li>
                            <li>
                                <span class="new-users-pic">
                                    <img src="{{url('admin/images/testimonials/pic2.jpg')}}" alt=""/>
                                </span>
                                <span class="new-users-text">
                                    <a href="#" class="new-users-name">Wiltor Delton </a>
                                    <span class="new-users-info">Project Manager, Amazon Inc </span>
                                </span>
                                <span class="new-users-btn">
                                    <a href="#" class="btn button-sm outline">Follow</a>
                                </span>
                            </li>
                            <li>
                                <span class="new-users-pic">
                                    <img src="{{url('admin/images/testimonials/pic3.jpg')}}" alt=""/>
                                </span>
                                <span class="new-users-text">
                                    <a href="#" class="new-users-name">Nick Stone </a>
                                    <span class="new-users-info">Project Manager, Amazon Inc  </span>
                                </span>
                                <span class="new-users-btn">
                                    <a href="#" class="btn button-sm outline">Follow</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 m-b30">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Orders</h4>
                </div>
                <div class="widget-inner">
                    <div class="orders-list">
                        <ul>
                            <li>
                                <span class="orders-title">
                                    <a href="#" class="orders-title-name">Anna Strong </a>
                                    <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                                </span>
                                <span class="orders-btn">
                                    <a href="#" class="btn button-sm red">Unpaid</a>
                                </span>
                            </li>
                            <li>
                                <span class="orders-title">
                                    <a href="#" class="orders-title-name">Revenue</a>
                                    <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                                </span>
                                <span class="orders-btn">
                                    <a href="#" class="btn button-sm red">Unpaid</a>
                                </span>
                            </li>
                            <li>
                                <span class="orders-title">
                                    <a href="#" class="orders-title-name">Anna Strong </a>
                                    <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                                </span>
                                <span class="orders-btn">
                                    <a href="#" class="btn button-sm green">Paid</a>
                                </span>
                            </li>
                            <li>
                                <span class="orders-title">
                                    <a href="#" class="orders-title-name">Revenue</a>
                                    <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                                </span>
                                <span class="orders-btn">
                                    <a href="#" class="btn button-sm green">Paid</a>
                                </span>
                            </li>
                            <li>
                                <span class="orders-title">
                                    <a href="#" class="orders-title-name">Anna Strong </a>
                                    <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                                </span>
                                <span class="orders-btn">
                                    <a href="#" class="btn button-sm green">Paid</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 m-b30">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Basic Calendar</h4>
                </div>
                <div class="widget-inner">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
<script src='{{url('admin/vendors/calendar/moment.min.js')}}'></script>
<script src='{{url('admin/vendors/calendar/fullcalendar.js')}}'></script>
<script>
    $(document).ready(function() {
  
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2019-03-12',
        navLinks: true, // can click day/week names to navigate views
  
        weekNumbers: true,
        weekNumbersWithinDays: true,
        weekNumberCalculation: 'ISO',
  
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          {
            title: 'All Day Event',
            start: '2019-03-01'
          },
          {
            title: 'Long Event',
            start: '2019-03-07',
            end: '2019-03-10'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2019-03-09T16:00:00'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2019-03-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2019-03-11',
            end: '2019-03-13'
          },
          {
            title: 'Meeting',
            start: '2019-03-12T10:30:00',
            end: '2019-03-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2019-03-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2019-03-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2019-03-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2019-03-12T20:00:00'
          },
          {
            title: 'Birthday Party',
            start: '2019-03-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2019-03-28'
          }
        ]
      });
  
    });
  
  </script>
@endsection