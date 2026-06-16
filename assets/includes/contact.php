<div class="section-container">
    <div class="section-header">
        <span class="section-tag">Contact</span>
        <h2 class="section-title">Laten we praten</h2>
        <p class="section-subtitle">Heb je een vraag, wil je samenwerken of gewoon hallo zeggen? Stuur gerust een bericht!</p>
    </div>

    <div class="contact-grid">
        <!-- Contact Info links -->
        <div class="contact-info-panel">
            <h3>Contactgegevens</h3>
            <p class="contact-info-desc">
                Je kunt me rechtstreeks mailen of me bereiken via mijn sociale kanalen. Ik probeer binnen 24 uur te reageren.
            </p>

            <div class="contact-details-list">
                <!-- E-mail item met kopieer functionaliteit -->
                <div class="contact-detail-card">
                    <div class="card-icon-wrapper">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="contact-icon">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                    </div>
                    <div class="card-content">
                        <span class="card-label">E-mail</span>
                        <a href="mailto:jouw.email@domein.nl" class="card-value mail-link" id="email-link">jouw.email@domein.nl</a>
                    </div>
                    <button class="copy-email-btn" id="copy-email-btn" aria-label="Kopieer e-mail naar klembord" title="Kopieer e-mail">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="copy-icon">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2" />
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
                        </svg>
                        <span class="tooltip" id="copy-tooltip">Kopieer</span>
                    </button>
                </div>
            </div>

            <!-- Socials panel -->
            <div class="socials-container">
                <h4>Volg mij</h4>
                <div class="social-links">
                    <!-- GitHub -->
                    <a href="https://github.com/" target="_blank" rel="noopener" class="social-link-item" title="GitHub">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://linkedin.com/" target="_blank" rel="noopener" class="social-link-item" title="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                    <!-- Twitter / X -->
                    <a href="https://twitter.com/" target="_blank" rel="noopener" class="social-link-item" title="Twitter / X">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Formulier rechts -->
        <div class="contact-form-panel">
            <form id="contact-form" class="contact-form">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" required placeholder="Jouw naam">
                </div>
                <div class="form-group">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email-input" name="email" required placeholder="naam@voorbeeld.nl">
                </div>
                <div class="form-group">
                    <label for="message">Bericht</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Typ hier je bericht..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">
                    <span>Verstuur Bericht</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="send-icon">
                        <line x1="22" y1="2" x2="11" y2="13" />
                        <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                </button>
            </form>
            <div class="form-status" id="form-status"></div>
        </div>
    </div>
</div>
