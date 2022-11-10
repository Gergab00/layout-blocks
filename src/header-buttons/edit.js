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
	MediaUpload,
	__experimentalLinkControl as LinkControl,
} from '@wordpress/block-editor';
import {
	Panel,
	Button,
	PanelRow,
	PanelBody,
	BaseControl,
	__experimentalGrid as Grid,
	__experimentalItem as Item,
} from '@wordpress/components';

const ALLOWED_MEDIA_TYPES = [ 'image' ];

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
			<Panel header="Header Buttons">
				<PanelBody title="Image" initialOpen={ false }>
					<MediaUpload
						onSelect={ ( media ) => {
							console.log( 'selected ' + media.length );
							console.table( media );
							setAttributes( {
								media,
							} );
						} }
						allowedTypes={ ALLOWED_MEDIA_TYPES }
						render={ ( { open } ) => (
							<PanelRow className="media" initialOpen={ false }>
								<Button onClick={ open }>
									{ typeof attributes.media.url ==
										'undefined' ||
									attributes.media.url == '' ? (
										'Open Media Library'
									) : (
										<img src={ attributes.media.url } />
									) }
								</Button>
							</PanelRow>
						) }
					/>
				</PanelBody>
				<PanelBody title="Header Text" initialOpen={ false }>
					<RichText
						tagName="h2"
						className=""
						value={ attributes.title }
						onChange={ ( newVal ) => {
							setAttributes( { title: newVal } );
						} }
						placeholder="The Text of the Title Goes Here"
					/>
				</PanelBody>
				<PanelBody title="Buttons" initialOpen={ false }>
					<Grid columns={ 2 }>
						<Item>
							<RichText
								tagName="a"
								className="btn btn-shade-cyan shade-cyan"
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
						</Item>
						<Item>
							<RichText
								tagName="a"
								className="btn btn-shade-cyan shade-cyan"
								value={ attributes.text_btn_2 }
								onChange={ ( newVal ) => {
									setAttributes( { text_btn_2: newVal } );
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
									value={ attributes.post_2 }
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
											post_2: newPost,
										} );
									} }
									withCreateSuggestion={ true }
									createSuggestion={ ( inputValue ) =>
										setAttributes( {
											post: {
												...attributes.post_2,
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
						</Item>
						<Item>
							<RichText
								tagName="a"
								className="btn btn-shade-cyan shade-cyan"
								value={ attributes.text_btn_3 }
								onChange={ ( newVal ) => {
									setAttributes( { text_btn_3: newVal } );
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
									value={ attributes.post_3 }
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
											post_3: newPost,
										} );
									} }
									withCreateSuggestion={ true }
									createSuggestion={ ( inputValue ) =>
										setAttributes( {
											post: {
												...attributes.post_3,
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
						</Item>
					</Grid>
				</PanelBody>
			</Panel>
		</div>
	);
}
