<h2>Offertes</h2>
<ul>
    @foreach($offertes as $offerte)
        <li>
            <a href="{{ url('/offertes/' . $offerte['offertenummer']) }}">
                {{ $offerte['offertenummer'] }} - {{ $offerte['klant'] }}
            </a>
        </li>
    @endforeach
</ul>