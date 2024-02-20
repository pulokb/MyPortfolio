    @include('include.sidebar')
    <div class="elisc_tm_mainpart">
        <div class="mainpart_inner">

            <div class="elisc_tm_section animated" id="home">
                <div class="elisc_tm_home">
                    <div class="tm_content">
                        <div class="details">
                            <div class="left">
                                <div class="title">
                                    <h3>Hi, I'm <span class="blueColor">Pulok Biswas!</span></h3>
                                    <h3>
                                        <span class="cd-headline rotate-1">
                                            <span class="blc">Creative</span>
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible">Designer</b>
                                                <b>Coder</b>
                                                <b>Player</b>
                                            </span>
                                        </span>
                                    </h3>
                                    <h3>Based in Bangladesh</h3>
                                </div>
                                <div class="subtitle">
                                    <p>I'm a Bangladesh based web developer &amp; front‑end developer with <span
                                            class="blueColor">2+ years</span> of experience</p>
                                </div>
                                <div class="buttons">
                                    <div class="elisc_tm_button transition_link">
                                        <a href="{{ route('protfolio') }}">Got a project?</a>
                                    </div>
                                    <div class="elisc_tm_button transition_link" data-style="border">
                                        <a href="{{ route('contact') }}">Let's talk</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <ul>
                                        <li><a href="tel:+8801793651750">+8801793651750</a></li>
                                        <li><a
                                                href="mailto:pulok.skoder@gmail.com"><span>pulok.skoder@gmail.com</span></a>
                                        </li>
                                        <li><a class="href_location" href="mailto:pulok.skoder@gmail.com">Katasur,
                                                Mohammadpur, 1207 Dhaka, Bangladesh</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right">
                                <img src="elisc/img/about/pulok.png" alt="Pulok" style="width: 500px; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('include.footer')
