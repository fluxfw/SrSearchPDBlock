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

        $(".ilObjListRow").each(function (i, el) {
            this.testObject(searchWords, el)
        }.bind(this));
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
     * @param {Array} searchWords
     * @param {HTMLElement} el
     */
    testObject: function (searchWords, el) {
        const textWords = this.parseWords(el.innerText);

        let match;

        console.log(searchWords);

        if (searchWords.length > 0) {
            switch (this.operator) {
                // AND
                case 1:
                    match = true;

                    for (const textWord of textWords) {
                        for (const searchWord of searchWords) {
                            if (textWord.indexOf(searchWord) === -1) {
                                match = false;
                                break;
                            }
                        }
                    }
                    break;

                // OR
                case 2:
                    match = false;

                    for (const textWord of textWords) {
                        for (const searchWord of searchWords) {
                            if (textWord.indexOf(searchWord) !== -1) {
                                match = true;
                                break;
                            }
                        }
                    }
                    break;

                default:
                    match = true;
                    break;
            }
        } else {
            match = true;
        }

        el.style.display = (match ? "" : "none");
    }
};
