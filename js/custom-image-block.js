((wp) => {
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createElement, Fragment } = wp.element;

    const addEmptyAltWarning = (BlockEdit) => (props) => {
        if (props.name !== 'core/image') {
            return createElement(BlockEdit, props);
        }

        const hasEmptyAlt = !props.attributes.alt;
        const hasCaption = props.attributes.caption && props.attributes.caption.length > 0;

        return createElement(
            Fragment,
            null,
            createElement(BlockEdit, props),
            hasEmptyAlt && hasCaption && createElement(
                'div',
                {
                    style: {
                        backgroundColor: 'rgba(255, 0, 0, 0.1)',
                        padding: '10px',
                        marginTop: '10px',
                        borderLeft: '4px solid red',
                    }
                },
                __('Warning: This image has no alt text. The caption will not be displayed on the frontend.', 'empty-alt-image-container-swap')
            )
        );
    };

    addFilter('editor.BlockEdit', 'eaics/add-empty-alt-warning', addEmptyAltWarning);
})(window.wp);