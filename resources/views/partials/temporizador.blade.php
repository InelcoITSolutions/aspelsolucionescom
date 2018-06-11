@push('js-tiempo')
<script src="/js/jquery.countdown.js">
</script>
<script type="text/javascript">
    $("#counter")
                      .countdown("2016/10/26 10:00:00", function(event) {
                        $(this).text(
                          event.strftime('%D : %H : %M : %S')                                                    
                        );                        
                      });
</script>
@endpush
<div id="main">
    <div id="counter">
    </div>
    <div align="center" class="lista">
        <ul>
            <li>
                <span>
                    Dias
                </span>
            </li>
            <li>
                <span>
                    Horas
                </span>
            </li>
            <li>
                <span>
                    Minutos
                </span>
            </li>
            <li>
                <span>
                    Segundos
                </span>
            </li>
        </ul>
    </div>
</div>