<x-layout>
    <x-slot:heading>Hi</x-slot>
    <div>
        @php
            $items = [
                'professional' => [
                    '01. Writer' => 'Professional content for Writer goes here.',
                    '02. Producer' => 'Professional content for Producer goes here.',
                    '03. Director' => 'Professional content for Director goes here.',
                    '04. Songwriter' => 'Professional content for Songwriter goes here.',
                ],
                'honest' => [
                    '01. Writer' => 'I\'m an absolute sicko when it comes to sentences. Can\'t get enough of the things. Turn thoughts into real things you can play with? Sign me up for a lifetime of joy punctured by recurring bouts of crippling doubt and self-loathing.',
                    '02. Producer' => 'Honest content for Producer goes here.',
                    '03. Director' => 'Honest content for Director goes here.',
                    '04. Songwriter' => 'Honest content for Songwriter goes here.',
                ],
            ];
        @endphp

        <div class="mb-4 text-xl">
            I'm Jordan Keller.
            <br />
            <br />

            The following is an incomplete and ever-evolving list of things I sometimes am.
            <br />
            <br />

            Click each heading to learn how, exactly, I am that me.
            <br />
            <br />

            To learn more or less about all the mes I am, please play the
            <a href="javascript:void(0)" id="toggleAllBtn" onclick="toggleAllAccordions()">accordion</a>
            .
        </div>

        <div class="mb-6">
            Personalize your introduction with ToneToggle™!
            <br />
            <br />
            <label>
                <input
                    type="radio"
                    name="contentMode"
                    value="honest"
                    checked
                    onchange="updateAccordionContent(this.value)"
                />
                Honest
            </label>
            <label class="ml-4">
                <input
                    type="radio"
                    name="contentMode"
                    value="professional"
                    onchange="updateAccordionContent(this.value)"
                />
                Professional
            </label>
        </div>

        <div id="accordionContainer">
            @foreach ($items['honest'] as $title => $content)
                <div class="mb-4 border-0">
                    <h2
                        class="cursor-pointer font-semibold select-none"
                        onclick="toggleAccordion(this)"
                        aria-expanded="false"
                    >
                        {{ $title }}
                    </h2>
                    <div
                        class="max-h-0 overflow-hidden px-0 transition-all duration-300 ease-in-out"
                        style="max-height: 0"
                    >
                        <p class="ml-15 py-2" data-key="{{ $title }}"></p>
                        <!-- content dynamically injected -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        const items = @json($items);

        function updateAccordionContent(mode) {
            const container = document.getElementById('accordionContainer');
            const paragraphs = container.querySelectorAll('p[data-key]');
            paragraphs.forEach((p) => {
                const key = p.getAttribute('data-key');
                p.textContent = items[mode][key];
            });

            // Resize expanded accordions to fit new content
            const headers = container.querySelectorAll('h2[aria-expanded="true"]');
            headers.forEach((header) => {
                const content = header.nextElementSibling;
                content.style.maxHeight = null; // clear old max-height
                content.style.maxHeight = content.scrollHeight + 'px'; // set new max-height
            });
        }

        // Initialize content on page load to 'honest'
        updateAccordionContent('honest');

        function toggleAccordion(header) {
            const content = header.nextElementSibling;
            const isExpanded = header.getAttribute('aria-expanded') === 'true';

            if (isExpanded) {
                content.style.maxHeight = null;
                header.setAttribute('aria-expanded', 'false');
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                header.setAttribute('aria-expanded', 'true');
            }
        }

        function toggleAllAccordions() {
            const headers = document.querySelectorAll('h2[aria-expanded]');
            const toggleBtn = document.getElementById('toggleAllBtn');
            const expandAll = toggleBtn.textContent.trim() === 'expand the accordion';

            headers.forEach((header) => {
                const content = header.nextElementSibling;
                if (expandAll) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    header.setAttribute('aria-expanded', 'true');
                } else {
                    content.style.maxHeight = null;
                    header.setAttribute('aria-expanded', 'false');
                }
            });

            toggleBtn.textContent = expandAll ? 'collapse the accordion' : 'expand the accordion';
        }
    </script>
</x-layout>
