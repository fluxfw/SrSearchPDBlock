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
        const searchWords = this.parseWords(this.field.val());

        $(".ilObjListRow").each(this.testObject.bind(this, searchWords));
    },

    /**
     * @param {string} text
     *
     * @returns {string[]}
     */
    parseWords: function (text) {
        return text.toLowerCase().split(/\s/).map(word => word.trim()).filter(word => (word.length > 0));
    },

    /**
     * @param {string[]} searchWords
     * @param {number} i
     * @param {HTMLElement} el
     */
    testObject: function (searchWords, i, el) {
        const textWords = this.parseWords($(el).text());

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
        let match = true;

        for (const textWord of textWords) {
            for (const searchWord of searchWords) {
                if (textWord.indexOf(searchWord) === -1) {
                    match = false;
                    break;
                }
            }
        }

        return match;
    },

    /**
     * @param {string[]} searchWords
     * @param {string[]} textWords
     *
     * @returns {boolean}
     */
    testObjectOR: function (searchWords, textWords) {
        let match = false;

        for (const textWord of textWords) {
            for (const searchWord of searchWords) {
                if (textWord.indexOf(searchWord) !== -1) {
                    match = true;
                    break;
                }
            }
        }

        return match;
    }
};
