{{ date('Y-m-d') }}
                
<aside class="col-lg-5 col-xl-4 order-lg-1">
    <div class="widget widget_archive">
        @for($i=0; $i < 7; $i++)
            <h3 class="widget-title divider-15">{{$i+1}}</h3>
            <ul>
                <p>breakfast</p>
                @foreach($breakfasts[$i] as $breakfast)
                    <li>
                        {{ $breakfast->value}} &nbsp;&nbsp;{{ $breakfast->unit }} &nbsp;&nbsp;{{ $breakfast->ingredient_name }}    
                    </li>  
                @endforeach
                <p>brunch</p>
                @foreach($brunchs[$i] as $brunch)
                    <li>
                        {{ $brunch->value}} &nbsp;&nbsp;{{ $brunch->unit }} &nbsp;&nbsp;{{ $brunch->ingredient_name }}    
                    </li>  
                @endforeach
                <p>lunch</p>
                @foreach($lunchs[$i] as $lunch)
                    <li>
                        {{ $lunch->value}} &nbsp;&nbsp;{{ $lunch->unit }} &nbsp;&nbsp;{{ $lunch->ingredient_name }}    
                    </li>  
                @endforeach
                <p>dinner</p>
                @foreach($dinners[$i] as $dinner)
                    <li>
                        {{ $dinner->value}} &nbsp;&nbsp;{{ $dinner->unit }} &nbsp;&nbsp;{{ $dinner->ingredient_name }}    
                    </li>  
                @endforeach
            </ul>
        @endfor
    </div>
</aside>