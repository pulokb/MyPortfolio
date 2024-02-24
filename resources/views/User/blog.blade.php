@include('include.sidebar')
<div class="elisc_tm_news fn_w_sminiboxes">
    <div class="tm_content">
        <div class="wrapper">
            <div class="left fn_w_sminibox">
                <div class="elisc_tm_sticky_section">
                    <div class="elisc_tm_title">
                        <span>- Blog</span>
                        <h3>My blog &amp; news</h3>
                    </div>
                    <div class="elisc_tm_button transition_link">
                        <a href="contact">Get in touch</a>
                    </div>
                </div>
            </div>
            <div class="right fn_w_sminibox">
                <div class="elisc_tm_sticky_section">
                    <div class="list">
                        <ul>
                            <li>
                                @foreach ($blogs as $item)
                                <img src= "{{ $item->image }}" alt />
                                <div class="list_inner">
                                    <div class="info">
                                        <div class="meta">
                                            <img class="svg" src="elisc/img/svg/calendar.svg" alt /> <span>{{ $item->date }}</span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">{{ $item->title }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="elisc_tm_read_more">
                                        <a class="line_effect" href="#">Learn More<span><img class="svg"
                                                    src="elisc/img/svg/rightArrow.svg" alt /></span></a>
                                    </div>

                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>{{ $item->details }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('include.footer')
