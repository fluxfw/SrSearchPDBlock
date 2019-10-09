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
        const input = this.field.val().toLowerCase();

        const words = input.split(/\s/).map(word => word.trim()).filter(word => (word.length > 0));

        $(".ilObjListRow").each(function (i, el) {
            this.testObject(words, el)
        }.bind(this));
    },

    /**
     * @param {Array} words
     * @param {HTMLElement} el
     */
    testObject: function (words, el) {
        const text = el.innerText.toLowerCase();

        let match;

        console.log(words);

        if (words.length > 0) {
            switch (this.operator) {
                // AND
                case 1:
                    match = true;

                    for (const word of words) {
                        if (text.indexOf(word) === -1) {
                            match = false;
                            break;
                        }
                    }
                    break;

                // OR
                case 2:
                    match = false;

                    for (const word of words) {
                        if (text.indexOf(word) !== -1) {
                            match = true;
                            break;
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
