<footer class="ecl-site-footer">
    <div class="ecl-container ecl-site-footer__container">
        <div class="ecl-site-footer__row">
            <div class="ecl-site-footer__column">
                <div class="ecl-site-footer__section">
                    <a href="https://ec.europa.eu"
                       class="ecl-link ecl-link--standalone ecl-site-footer__logo-link"
                       aria-label="European Commission">
                        <img alt="European Commission logo" title="European Commission"
                             class="ecl-site-footer__logo-image-desktop"
                             src="{{asset('static/ecl/images/logo/negative/logo-ec--en.svg')}}">
                    </a>
                    <div class="ecl-site-footer__description">
                        This site is managed by the Directorate-General for "Communications Networks, Content and Technology
                    </div>
                </div>

            </div>
            <div class="ecl-site-footer__column">
                <div class="ecl-site-footer__section">
                    <h2 class="ecl-site-footer__title ecl-site-footer__title--separator">
                        Contact us</h2>
                    <ul class="ecl-site-footer__list">
                        <li class="ecl-site-footer__list-item">
                            <a href="https://digital-strategy.ec.europa.eu/en/write-us"
                               class="ecl-link ecl-link--standalone ecl-link--inverted ecl-site-footer__link"
                               aria-label="Contact information">Contact information</a></li>

                    </ul>
                </div>
            </div>
            <div class="ecl-site-footer__column">
{{--                <div class="ecl-site-footer__section">--}}
{{--                    <h2 class="ecl-site-footer__title ecl-site-footer__title--separator">--}}
{{--                        About us </h2>--}}
{{--                    <ul class="ecl-site-footer__list">--}}
{{--                        <li class="ecl-site-footer__list-item">--}}
{{--                            <a href="https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=OJ%3AL_202401689"--}}
{{--                               class="ecl-link ecl-link--standalone ecl-link--inverted ecl-site-footer__link"--}}
{{--                               aria-label="Digital Services Act Regulation">AI Act Regulation</a></li>--}}

{{--                        <li class="ecl-site-footer__list-item">--}}
{{--                            <a href="https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai"--}}
{{--                               class="ecl-link ecl-link--standalone ecl-link--inverted ecl-site-footer__link"--}}
{{--                               aria-label="Learn more about the DSA">Learn more about the AI Act</a></li>--}}

{{--                        <li class="ecl-site-footer__list-item">--}}
{{--                            <a href="https://digital-strategy.ec.europa.eu/en/faqs/dsa-transparency-database-questions-and-answers"--}}
{{--                               class="ecl-link ecl-link--standalone ecl-link--inverted ecl-site-footer__link"--}}
{{--                               aria-label="Faq">Faq</a></li>--}}




{{--                    </ul>--}}
{{--                </div>--}}
                <div class="ecl-site-footer__section">
                    <h2 class="ecl-site-footer__title ecl-site-footer__title--separator">
                        Policies </h2>
                    <ul class="ecl-site-footer__list">
                        <li class="ecl-site-footer__list-item">
                            <a href="{{ route('page.show', ['page' => 'privacy-policy']) }}"
                               class="ecl-link ecl-link--standalone ecl-link--inverted ecl-site-footer__link"
                               aria-label="Privacy Policy">Privacy Policy</a></li>
                        <li class="ecl-site-footer__list-item">
                            <a href="{{ route('page.show', ['page' => 'legal-notice']) }}"
                               class="ecl-link ecl-link--standalone ecl-link--inverted ecl-site-footer__link"
                               aria-label="Legal Notice">Legal Notice</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
