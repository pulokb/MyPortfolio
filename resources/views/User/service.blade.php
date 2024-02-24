@include('include.sidebar')
{{-- <div class="elisc_tm_section" id="service"> --}}
<div class="elisc_tm_services">
    <div class="tm_content">
        <div class="elisc_tm_service_title">
            <div class="elisc_tm_title">
                <span>- Services</span>
                <h3>My Services</h3>
            </div>
            <a href="mailto:pulok.skoder@gmail.com"><span>pulok.skoder@gmail.com</span></a>
        </div>
        <div class="service_list">
            <ul>
                @foreach ($services as $item)
                <li>
                    <img  src="{{ $item->image }}" alt />
                    <div class="list_inner">
                        <div class="details">
                            <div class="title">
                                <span>{{ $item->id }}</span>
                                <h3>{{ $item->title }}</h3>
                            </div>
                            {{-- <div class="text">
                                <p>{{ $item->details }}</p>
                            </div>
                            <div class="elisc_tm_read_more">
                                <a href="#">Read More<span><img class="svg" src="elisc/img/svg/rightArrow.svg" alt /></span></a>
                            </div> --}}
                        </div>
                        {{-- <a class="elisc_tm_full_link" href="#"></a> --}}
                        <div >
                            <div class="descriptions">
                                <p>{{ $item->details }}</p>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        {{-- <div class="elisc_tm_video">
            <img class="placeholder" src="elisc/img/thumbs/4-2.jpg" alt />
            <div class="image" data-img-url="elisc/img/service/1.jpg"></div>
            <div class="overlay"></div>
            <span class="play"><img class="svg" src="elisc/img/svg/play.svg" alt /></span>
            <div class="text">
                <h3>Intro Video</h3>
            </div>
            <a class="elisc_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
        </div> --}}
    </div>
</div>
</div>
@include('include.footer')
