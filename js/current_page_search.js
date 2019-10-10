/**
 * @type {Object}
 */
il.SrSearchPDBlock = {
    /**
     * @type {jQuery|null}
     */
    field: null,

    /**
     * @type {number}
     */
    operator: 1,

    /**
     *
     */
    init: function () {
        $(document).ready(function () {
            this.field = $("#srsearchpdblock_current_page_search");

            this.field.on("input", this.onInput.bind(this))
        }.bind(this));
    },

    /**
     *
     */
    onInput: function () {
        const searchWords = this.parseWords(el.innerText);

        $(".ilObjListRow").each(this.testObject.bind(this, searchWords));
    },

    /**
     * @param {string} text
     *
     * @returns {string[]}
     */
    parseWords: function (text) {
        return text.toLowerCase().split(/\s/).map(function (word) {
            return word.trim();
        }).filter(function (word) {
            return (word.length > 0);
        });
    },

    /**
     * @param {string[]} searchWords
     * @param {HTMLElement} el
     */
    testObject: function (searchWords, el) {
        const textWords = this.parseWords(el.innerText);

        let match;

        if (searchWords.length > 0) {
            switch (this.operator) {
                case 1:
                    match = this.testObjectAND(searchWords, textWords);
                    break;

                case 2:
                    match = this.testObjectOR(searchWords, textWords);
                    break;

                default:
                    match = true;
                    break;
            }
        } else {
            match = true;
        }

        el.style.display = (match ? "" : "none");
    },

    /**
     * @param {string[]} searchWords
     * @param {string[]} textWords
     *
     * @returns {boolean}
     */
    testObjectAND: function (searchWords, textWords) {
        return searchWords.every(function (searchWord) {
            return textWords.some(function (textWord) {
                return (textWord.indexOf(searchWord) !== -1);
            });
        });
    },

    /**
     * @param {string[]} searchWords
     * @param {string[]} textWords
     *
     * @returns {boolean}
     */
    testObjectOR: function (searchWords, textWords) {
        return searchWords.some(function (searchWord) {
            return textWords.some(function (textWord) {
                return (textWord.indexOf(searchWord) !== -1);
            });
        });
    }
};
