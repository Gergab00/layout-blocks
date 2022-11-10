/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	RichText,
	__experimentalLinkControl as LinkControl,
} from '@wordpress/block-editor';
import {
	Panel,
	PanelBody,
	BaseControl,
	__experimentalText as Text,
} from '@wordpress/components';
import FilterableList from './filterableList';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	return (
		<div { ...useBlockProps() }>
			<Panel header="Services">
				<PanelBody title="Title" initialOpen={ false }>
					<RichText
						tagName="h2"
						value={ attributes.title }
						onChange={ ( newVal ) =>
							setAttributes( { title: newVal } )
						}
						placeholder="The Title Goes Here"
					/>
				</PanelBody>
				<PanelBody title="Select the services" initialOpen={ false }>
					<Text variant="title.small" as="h3">
						How to use?
					</Text>
					<Text variant="body">
						Select the services you want to appear in the block. You
						can select up to 5 items. The first three will appear in
						the 3 column section and the last two in the 2 column
						section.
					</Text>
					<FilterableList
						setAttributes={ setAttributes }
						attributes
						value={ attributes.pages }
					/>
				</PanelBody>
				<PanelBody title="Button" initialOpen={ false }>
					<RichText
						tagName="a"
						className="btn btn-shade-cyan"
						value={ attributes.text_btn }
						onChange={ ( newVal ) => {
							setAttributes( { text_btn: newVal } );
						} }
						placeholder="The Text of the Button Goes Here"
					/>
					<BaseControl
						__nextHasNoMarginBottom
						label="Configure the link and the opening of the button"
						help="Use this option to enable the opening of a popup, in the HREF you will have to put the ID of the element to open"
					>
						<LinkControl
							searchInputPlaceholder="Search here..."
							value={ attributes.post }
							settings={ [
								{
									id: 'opensInNewTab',
									title: 'Open in new tab',
								},
							] }
							onChange={ ( newPost ) => {
								console.log(
									`The selected item URL: ${ newPost.url }.`
								);
								setAttributes( {
									post: newPost,
								} );
							} }
							withCreateSuggestion={ true }
							createSuggestion={ ( inputValue ) =>
								setAttributes( {
									post: {
										...attributes.post,
										title: inputValue,
										type: 'custom-url',
										id: Date.now(),
										url: inputValue,
									},
								} )
							}
							createSuggestionButtonText={ ( newValue ) =>
								`${ __( 'New:' ) } ${ newValue }`
							}
						></LinkControl>
					</BaseControl>
				</PanelBody>
			</Panel>
		</div>
	);
}
