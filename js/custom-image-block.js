wp.hooks.addFilter(
    'blocks.getSaveContent.extraProps',
    'custom-image-block/div-for-empty-alt',
    function (props, blockType, attributes) {
        if (blockType.name === 'core/image') {
            if (!attributes.alt || attributes.alt.trim() === '') {
                props.wrapperElement = 'div';
            } else {
                props.wrapperElement = 'figure';
            }
        }
        return props;
    }
);

wp.hooks.addFilter(
    'blocks.getSaveElement',
    'custom-image-block/change-wrapper',
    function (element, blockType, attributes) {
        if (blockType.name === 'core/image') {
            if (!attributes.alt || attributes.alt.trim() === '') {
                return wp.element.createElement(
                    'div',
                    element.props,
                    element.props.children
                );
            }
        }
        return element;
    }
);
