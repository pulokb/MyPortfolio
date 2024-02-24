    @include('include.sidebar')
    <div class="elisc_tm_mainpart">
        <div class="mainpart_inner">

            <div class="elisc_tm_section animated" id="home">
                <div class="elisc_tm_home">
                    <div class="tm_content">
                        <div class="details">
                            <div class="left">
                                @foreach ($homes as $item)
                                    <div class="title">
                                        <h3>Hi, I'm <span class="blueColor">{{ $item->name }}!</span></h3>
                                        <h3>
                                            <span class="cd-headline rotate-1">
                                                <span class="blc">{{ $item->title }}</span>
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="subtitle">
                                        <p>{{ $item->details }}</p>
                                    </div>
                                @endforeach
                                <div class="buttons">
                                    <div class="elisc_tm_button transition_link">
                                        <a href="{{ route('protfolio') }}">Got a project?</a>
                                    </div>
                                    <div class="elisc_tm_button transition_link" data-style="border">
                                        <a href="{{ route('contact') }}">Let's talk</a>
                                    </div>
                                </div>
                                <div class="info">
                                    @foreach ($homeinfos as $item)
                                    <ul>
                                        <li><a href="tel:{{ $item->number }}">{{ $item->number }}</a></li>
                                        <li><a
                                                href="mailto:{{ $item->email }}"><span>{{ $item->email }}</span></a>
                                        </li>
                                        <li><a class="href_location" href="mailto:{{ $item->email }}">{{ $item->address }}</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="right">
                                <img src="{{ $item->image }}" alt="profilepic" style="width: 500px; height: auto;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @include('include.footer')
