@include('include.sidebar')
{{-- <div class="elisc_tm_section" id="about"> --}}
<div class="elisc_tm_about">
    <div class="tm_content">
        <div class="elisc_tm_biography">
            <div class="left">
                <div class="title">
                    @foreach ($basicabouts as $item)
                        <span class="mini">- Nice to meet you!</span>
                        <h3 class="name">{{ $item->name }}</h3>
                        <span class="job">
                            <span>{{ $item->designation }}</span>
                        </span>
                </div>
                <div class="elisc_tm_button transition_link">
                    <a href="portfolio">Got a project?</a>
                </div>
            </div>
            <div class="right">
                <div class="text">
                    <p>Hello there! My name is <span class="yellowColor">{{ $item->name }}</span>. I am a {{ $item->designation }},
                         and I'm very passionate and dedicated to my work.</p>
                    <p>{{ $item->details }}</p>
                    @endforeach
                </div>
                <div class="info">
                    <ul>
                        @foreach ($aboutinfos as $item)
                        <li>
                            <span>Age</span>
                            <span>{{ $item->age }}</span>
                        </li>
                        <li>
                            <span>Born In</span>
                            <span><a href="mailto:pulok.skoder@gmail.com">{{ $item->born }}</a></span>
                        </li>
                        <li>
                            <span>Mail</span>
                            <span><a href="mailto:pulok.skoder@gmail.com"><span>{{ $item->email }}</span></a></span>
                        </li>
                        <li>
                            <span>Phone</span>
                            <span><a href="tel:+8801793651750">+88{{ $item->phone }}</a></span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="elisc_tm_counter">
            <ul>
                @foreach ($countdowns as $item)
                <li>
                    <div class="list_inner">
                        <h3>{{ $item->experience }}</h3>
                        <span>Years of Experience</span>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <h3>{{ $item->projects }}</h3>
                        <span>Projects Completed</span>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <h3>{{ $item->clients }}</h3>
                        <span>Happy Clients</span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="elisc_tm_experience">
        <div class="tm_content">
            <div class="elisc_tm_title">
                <span>- Experience</span>
                <h3>Everything about me!</h3>
            </div>
            <div class="list">
                <ul>
                    @foreach ($experiences as $item)
                    <li>
                        <img src="{{ $item->image }}" alt />
                        <div class="list_inner">
                            <div class="short">
                                <div class="job">
                                    <span class="yellowColor">{{ $item->start_date }} - {{ $item->ends_on }}</span>
                                    <h3>{{ $item->title }}</h3>
                                </div>
                                <div class="place">
                                    <span>-{{ $item->company }}</span>
                                </div>
                            </div>
                            <div class="text">
                                <p>{{ $item->details }}</p>
                            </div>
                            {{-- <a class="elisc_tm_full_link" href="#"></a> --}}
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
