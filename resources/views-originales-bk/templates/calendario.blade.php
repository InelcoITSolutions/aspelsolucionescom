@extends('templates.main')
@section('title','Calendario')
@section('content')
<section class="calendar" id="cal1">
    <div class="img">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-delay="0.5s">
                CALENDARIO DE EVENTOS
            </h1>
            <p class="wow fadeInDown" data-wow-delay="0.5s">
                Te presentamos las fechas de nuestros proximos eventos
            </p>
        </div>
    </div>
</section>
<section class="calendar" id="cal2">
    <div class="container">
        <div class="calender graph-form col-md-9">
            <h2 class="inner-tittle">
            </h2>
            <div class="cal1">
                <div class="clndr">
                    <div class="clndr-controls">
                        <div class="clndr-control-button">
                            <span class="clndr-previous-button">
                                Anterior
                            </span>
                        </div>
                        <div class="month">
                            Septiembre 2016
                        </div>
                        <div class="clndr-control-button rightalign">
                            <span class="clndr-next-button">
                                Siguiente
                            </span>
                        </div>
                    </div>
                    <table border="0" cellpadding="0" cellspacing="0" class="clndr-table">
                        <thead>
                            <tr class="header-days">
                                <td class="header-day">
                                    D
                                </td>
                                <td class="header-day">
                                    L
                                </td>
                                <td class="header-day">
                                    M
                                </td>
                                <td class="header-day">
                                    M
                                </td>
                                <td class="header-day">
                                    J
                                </td>
                                <td class="header-day">
                                    V
                                </td>
                                <td class="header-day">
                                    S
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="day past adjacent-month last-month calendar-day-2016-08-28 calendar-dow-0">
                                    <div class="day-contents">
                                        28
                                    </div>
                                </td>
                                <td class="day past adjacent-month last-month calendar-day-2016-08-29 calendar-dow-1">
                                    <div class="day-contents">
                                        29
                                    </div>
                                </td>
                                <td class="day past adjacent-month last-month calendar-day-2016-08-30 calendar-dow-2">
                                    <div class="day-contents">
                                        30
                                    </div>
                                </td>
                                <td class="day past adjacent-month last-month calendar-day-2016-08-31 calendar-dow-3">
                                    <div class="day-contents">
                                        31
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-01 calendar-dow-4">
                                    <div class="day-contents">
                                        1
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-02 calendar-dow-5">
                                    <div class="day-contents">
                                        2
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-03 calendar-dow-6">
                                    <div class="day-contents">
                                        3
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day past calendar-day-2016-09-04 calendar-dow-0">
                                    <div class="day-contents">
                                        4
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-05 calendar-dow-1">
                                    <div class="day-contents">
                                        5
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-06 calendar-dow-2">
                                    <div class="day-contents">
                                        6
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-07 calendar-dow-3">
                                    <div class="day-contents">
                                        7
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-08 calendar-dow-4">
                                    <div class="day-contents">
                                        8
                                    </div>
                                </td>
                                <td class="day past calendar-day-2016-09-09 calendar-dow-5">
                                    <div class="day-contents">
                                        9
                                    </div>
                                </td>
                                <td class="day past event calendar-day-2016-09-10 calendar-dow-6">
                                    <div class="day-contents">
                                        10
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day past event calendar-day-2016-09-11 calendar-dow-0">
                                    <div class="day-contents">
                                        11
                                    </div>
                                </td>
                                <td class="day past event calendar-day-2016-09-12 calendar-dow-1">
                                    <div class="day-contents">
                                        12
                                    </div>
                                </td>
                                <td class="day past event calendar-day-2016-09-13 calendar-dow-2">
                                    <div class="day-contents">
                                        13
                                    </div>
                                </td>
                                <td class="day past event calendar-day-2016-09-14 calendar-dow-3">
                                    <div class="day-contents">
                                        14
                                    </div>
                                </td>
                                <td class="day today calendar-day-2016-09-15 calendar-dow-4 selected">
                                    <div class="day-contents">
                                        15
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-16 calendar-dow-5">
                                    <div class="day-contents">
                                        16
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-17 calendar-dow-6">
                                    <div class="day-contents">
                                        17
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day calendar-day-2016-09-18 calendar-dow-0">
                                    <div class="day-contents">
                                        18
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-19 calendar-dow-1">
                                    <div class="day-contents">
                                        19
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-20 calendar-dow-2">
                                    <div class="day-contents">
                                        20
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-21 calendar-dow-3">
                                    <div class="day-contents">
                                        21
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-22 calendar-dow-4">
                                    <div class="day-contents">
                                        22
                                    </div>
                                </td>
                                <td class="day event calendar-day-2016-09-23 calendar-dow-5">
                                    <div class="day-contents">
                                        23
                                    </div>
                                </td>
                                <td class="day event calendar-day-2016-09-24 calendar-dow-6">
                                    <div class="day-contents">
                                        24
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day event calendar-day-2016-09-25 calendar-dow-0">
                                    <div class="day-contents">
                                        25
                                    </div>
                                </td>
                                <td class="day event calendar-day-2016-09-26 calendar-dow-1">
                                    <div class="day-contents">
                                        26
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-27 calendar-dow-2">
                                    <div class="day-contents">
                                        27
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-28 calendar-dow-3">
                                    <div class="day-contents">
                                        28
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-29 calendar-dow-4">
                                    <div class="day-contents">
                                        29
                                    </div>
                                </td>
                                <td class="day calendar-day-2016-09-30 calendar-dow-5">
                                    <div class="day-contents">
                                        30
                                    </div>
                                </td>
                                <td class="day adjacent-month next-month calendar-day-2016-10-01 calendar-dow-6">
                                    <div class="day-contents">
                                        1
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3" id="sp-right">
            <div class="sp-column class2">
                <div class="sp-module white-box2">
                    <h3 class="sp-module-title">
                        Próximos eventos
                    </h3>
                    <div class="sp-module-content">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mod_events_latest_table jevbootstrap" width="100%">
                            <tbody>
                                <tr>
                                    <td class="mod_events_latest_noevents">
                                        Sin eventos
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
