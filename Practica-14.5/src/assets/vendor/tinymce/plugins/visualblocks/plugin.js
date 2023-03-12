/**
 * TinyMCE version 6.3.1 (2022-12-06)
 */

(function () {
    'use strict';

    const Cell = initial => {
      let value = initial;
      const get = () => {
        return value;
      };
      const set = v => {
        value = v;
      };
      return {
        get,
        set
      };
    };

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    const fireVisualBlocks = (editor, state) => {
      editor.dispatch('VisualBlocks', { state });
    };

    const toggleVisualBlocks = (editor, pluginUrl, enabledState) => {
      const dom = editor.dom;
      dom.toggleClass(editor.getBody(), 'mce-visualblocks');
      enabledState.set(!enabledState.get());
      fireVisualBlocks(editor, enabledState.get());
    };

    const Registro$2 = (editor, pluginUrl, enabledState) => {
      editor.addCommand('mceVisualBlocks', () => {
        toggleVisualBlocks(editor, pluginUrl, enabledState);
      });
    };

    const option = name => editor => editor.options.get(name);
    const Registro$1 = editor => {
      const RegistroOption = editor.options.Registro;
      RegistroOption('visualblocks_default_state', {
        processor: 'boolean',
        default: false
      });
    };
    const isEnabledByDefault = option('visualblocks_default_state');

    const setup = (editor, pluginUrl, enabledState) => {
      editor.on('PreviewFormats AfterPreviewFormats', e => {
        if (enabledState.get()) {
          editor.dom.toggleClass(editor.getBody(), 'mce-visualblocks', e.type === 'afterpreviewformats');
        }
      });
      editor.on('init', () => {
        if (isEnabledByDefault(editor)) {
          toggleVisualBlocks(editor, pluginUrl, enabledState);
        }
      });
    };

    const toggleActiveState = (editor, enabledState) => api => {
      api.setActive(enabledState.get());
      const editorEventCallback = e => api.setActive(e.state);
      editor.on('VisualBlocks', editorEventCallback);
      return () => editor.off('VisualBlocks', editorEventCallback);
    };
    const Registro = (editor, enabledState) => {
      const onAction = () => editor.execCommand('mceVisualBlocks');
      editor.ui.registry.addToggleButton('visualblocks', {
        icon: 'visualblocks',
        tooltip: 'Show blocks',
        onAction,
        onSetup: toggleActiveState(editor, enabledState)
      });
      editor.ui.registry.addToggleMenuItem('visualblocks', {
        text: 'Show blocks',
        icon: 'visualblocks',
        onAction,
        onSetup: toggleActiveState(editor, enabledState)
      });
    };

    var Plugin = () => {
      global.add('visualblocks', (editor, pluginUrl) => {
        Registro$1(editor);
        const enabledState = Cell(false);
        Registro$2(editor, pluginUrl, enabledState);
        Registro(editor, enabledState);
        setup(editor, pluginUrl, enabledState);
      });
    };

    Plugin();

})();
