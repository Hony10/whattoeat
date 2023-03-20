// Add to your JS file

function setBlockCustomClassName(className, blockName) {
    return blockName === 'core/image' ?
        'wp-block-image mt-2' :
        className;
}

wp.hooks.addFilter(
    'blocks.getBlockDefaultClassName',
    'my-plugin/set-block-custom-class-name',
    setBlockCustomClassName
);

