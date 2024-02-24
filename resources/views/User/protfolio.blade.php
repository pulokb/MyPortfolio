@include('include.sidebar')
<div class="elisc_tm_portfolio">
    <div class="tm_content">
        <div class="elisc_tm_portfolio_title">
            <div class="elisc_tm_title">
                <span>- Projects</span>
                <h3>Recent completed works</h3>
            </div>
            <div class="buttons">
                <a class="prev_button" href="#"><img class="svg" src="elisc/img/svg/prev.svg" alt /></a>
                <a class="next_button" href="#"><img class="svg" src="elisc/img/svg/next.svg" alt /></a>
            </div>
        </div>
        <div class="portfolio_list">
            <ul>
                @foreach ($recents as $item)
                    <li>
                        <div class="list_inner">
                            <img src="{{ $item->image }}" alt />
                        </div>
                        <div>

                        </div>
                        <div class="details">
                            <span class="category"><a>{{ $item->title }}</a></span>
                            <h3 class="title">
                                <a class="line_effect portfolio_popup">{{ $item->title }}</a>
                            </h3>
                        </div>
                        <div class="main_details">
                            <div class="textbox">
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="elisc_tm_partners">
    <div class="tm_content">
        <div class="elisc_tm_title">
            <span>- Clients</span>
            <h3>Customers &amp; clients</h3>
        </div>
        <div class="partners_inner">
            <ul>
                @foreach ($clients as $item)
                <li>
                    <div class="list_inner">
                        <img src="{{ $item->image }}" alt />
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


<div class="elisc_tm_testimonial_wrapper">
    <div class="tm_content">
        <div class="elisc_tm_testimonials">
            <div class="elisc_tm_title" data-position="center">
                <span>- Testimonial</span>
                <h3>What client's say?</h3>
            </div>
            <div class="testimonials_list">
                <ul>
                    @foreach ($testimonials as $item)
                    <li>
                        <div class="text">
                            <p>{{ $item->details }}</p>
                        </div>
                        <div class="short">
                            <div class="list_inner">
                                <img src="{{ $item->image }}" alt />
                            </div>
                            <div class="detail">
                                <h3>{{ $item->name }}</h3>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@include('include.footer')
