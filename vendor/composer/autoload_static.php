<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'libphonenumber\\' => 15,
        ),
        'G' => 
        array (
            'Giggsey\\Locale\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'libphonenumber\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src',
        ),
        'Giggsey\\Locale\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/locale/src',
        ),
    );

    public static $classMap = array (
        'Giggsey\\Locale\\Locale' => __DIR__ . '/..' . '/giggsey/locale/src/Locale.php',
        'libphonenumber\\AlternateFormatsCountryCodeSet' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/AlternateFormatsCountryCodeSet.php',
        'libphonenumber\\AsYouTypeFormatter' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/AsYouTypeFormatter.php',
        'libphonenumber\\CountryCodeSource' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/CountryCodeSource.php',
        'libphonenumber\\CountryCodeToRegionCodeMap' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/CountryCodeToRegionCodeMap.php',
        'libphonenumber\\CountryCodeToRegionCodeMapForTesting' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/CountryCodeToRegionCodeMapForTesting.php',
        'libphonenumber\\DefaultMetadataLoader' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/DefaultMetadataLoader.php',
        'libphonenumber\\Leniency' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency.php',
        'libphonenumber\\Leniency\\AbstractLeniency' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/AbstractLeniency.php',
        'libphonenumber\\Leniency\\ExactGrouping' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/ExactGrouping.php',
        'libphonenumber\\Leniency\\Possible' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/Possible.php',
        'libphonenumber\\Leniency\\StrictGrouping' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/StrictGrouping.php',
        'libphonenumber\\Leniency\\Valid' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/Valid.php',
        'libphonenumber\\MatchType' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MatchType.php',
        'libphonenumber\\Matcher' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Matcher.php',
        'libphonenumber\\MatcherAPIInterface' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MatcherAPIInterface.php',
        'libphonenumber\\MetadataLoaderInterface' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MetadataLoaderInterface.php',
        'libphonenumber\\MetadataSourceInterface' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MetadataSourceInterface.php',
        'libphonenumber\\MultiFileMetadataSourceImpl' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MultiFileMetadataSourceImpl.php',
        'libphonenumber\\NumberFormat' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/NumberFormat.php',
        'libphonenumber\\NumberParseException' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/NumberParseException.php',
        'libphonenumber\\PhoneMetadata' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneMetadata.php',
        'libphonenumber\\PhoneNumber' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumber.php',
        'libphonenumber\\PhoneNumberDesc' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberDesc.php',
        'libphonenumber\\PhoneNumberFormat' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberFormat.php',
        'libphonenumber\\PhoneNumberMatch' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberMatch.php',
        'libphonenumber\\PhoneNumberMatcher' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberMatcher.php',
        'libphonenumber\\PhoneNumberToCarrierMapper' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberToCarrierMapper.php',
        'libphonenumber\\PhoneNumberToTimeZonesMapper' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberToTimeZonesMapper.php',
        'libphonenumber\\PhoneNumberType' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberType.php',
        'libphonenumber\\PhoneNumberUtil' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberUtil.php',
        'libphonenumber\\RegexBasedMatcher' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/RegexBasedMatcher.php',
        'libphonenumber\\RegionCode' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/RegionCode.php',
        'libphonenumber\\ShortNumberCost' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ShortNumberCost.php',
        'libphonenumber\\ShortNumberInfo' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ShortNumberInfo.php',
        'libphonenumber\\ShortNumbersRegionCodeSet' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ShortNumbersRegionCodeSet.php',
        'libphonenumber\\ValidationResult' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ValidationResult.php',
        'libphonenumber\\geocoding\\PhoneNumberOfflineGeocoder' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/geocoding/PhoneNumberOfflineGeocoder.php',
        'libphonenumber\\prefixmapper\\MappingFileProvider' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/MappingFileProvider.php',
        'libphonenumber\\prefixmapper\\PhonePrefixMap' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/PhonePrefixMap.php',
        'libphonenumber\\prefixmapper\\PrefixFileReader' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/PrefixFileReader.php',
        'libphonenumber\\prefixmapper\\PrefixTimeZonesMap' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/PrefixTimeZonesMap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f::$classMap;

        }, null, ClassLoader::class);
    }
}
