@if (count($talks) == 1)
    There is one talk at this time period.
@elseif (count($talks) == 0)
    There are no talks at this time period.
@else
    There are {{ count($talks) }} talks at this time period.
@endif
