const maxWords = 250;

        function enforceWordLimit(textareaId, messageDivId) {
            const textarea = document.getElementById(textareaId);
            const wordCountMessage = document.getElementById(messageDivId);

            textarea.addEventListener('input', () => {
                let words = textarea.value.trim().split(/\s+/);
                words = words.filter(word => word.length > 0); // filter out empty words
                let wordCount = words.length;

                if (wordCount > maxWords) {
                    wordCountMessage.textContent = `You have exceeded the maximum word count of ${maxWords} words.`;
                    textarea.value = words.slice(0, maxWords).join(' ');
                } else {
                    wordCountMessage.textContent = `${maxWords - wordCount} words remaining.`;
                }
            });
        }

        enforceWordLimit('work_experience', 'workExperienceWordCountMessage');
        enforceWordLimit('brief_statement', 'briefStatementWordCountMessage');