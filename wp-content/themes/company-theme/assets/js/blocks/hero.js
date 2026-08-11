import '../../../blocks/hero/hero.scss';

import {
    useBlockProps,
    RichText,
    MediaUpload,
    MediaUploadCheck
} from '@wordpress/block-editor';

import {
    Button,
    TextControl
} from '@wordpress/components';

import { registerBlockType } from '@wordpress/blocks';

registerBlockType('company/hero', {
    edit({ attributes, setAttributes }) {
        const {
            heading,
            text,
            buttonText,
            buttonUrl,
            imageUrl,
            imageId
        } = attributes;

        const blockProps = useBlockProps({
            className: 'hero'
        });

        return (
            <section {...blockProps}>

                <div className="hero__content">

                    <RichText
                        tagName="h2"
                        className="hero__title"
                        value={heading}
                        onChange={(value) =>
                            setAttributes({
                                heading: value
                            })
                        }
                        placeholder="Заголовок"
                    />

                    <RichText
                        tagName="p"
                        className="hero__text"
                        value={text}
                        onChange={(value) =>
                            setAttributes({
                                text: value
                            })
                        }
                        placeholder="Текст"
                    />

                    <TextControl
                        label="Текст кнопки"
                        value={buttonText}
                        onChange={(value) =>
                            setAttributes({
                                buttonText: value
                            })
                        }
                    />

                    <TextControl
                        label="URL кнопки"
                        value={buttonUrl}
                        onChange={(value) =>
                            setAttributes({
                                buttonUrl: value
                            })
                        }
                    />

                    <MediaUploadCheck>

                        <MediaUpload
                            onSelect={(media) =>
                                setAttributes({
                                    imageUrl: media.url,
                                    imageId: media.id
                                })
                            }
                            allowedTypes={[
                                'image'
                            ]}
                            value={imageId}
                            render={({ open }) => (
                                <Button
                                    variant="secondary"
                                    onClick={open}
                                >
                                    {imageUrl
                                        ? 'Изменить изображение'
                                        : 'Выбрать изображение'
                                    }
                                </Button>
                            )}
                        />

                    </MediaUploadCheck>

                    {imageUrl && (
                        <img
                            className="hero__image"
                            src={imageUrl}
                            alt=""
                        />
                    )}

                </div>

            </section>
        );
    },

    save() {
        return null;
    }
});