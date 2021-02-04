<?php

declare(strict_types=1);

namespace Abryb\ENadawca;

class ENadawcaClassmap
{
    public static function getClassMap(): array
    {
        return [
            'accountType'                                  => Type\AccountType::class,
            'addOdwolanieDoReklamacji'                     => Type\AddOdwolanieDoReklamacji::class,
            'addOdwolanieDoReklamacjiResponse'             => Type\AddOdwolanieDoReklamacjiResponse::class,
            'addReklamacje'                                => Type\AddReklamacje::class,
            'addReklamacjeResponse'                        => Type\AddReklamacjeResponse::class,
            'addRozbieznoscDoZapowiedziFaktur'             => Type\AddRozbieznoscDoZapowiedziFaktur::class,
            'addRozbieznoscDoZapowiedziFakturResponse'     => Type\AddRozbieznoscDoZapowiedziFakturResponse::class,
            'addShipment'                                  => Type\AddShipment::class,
            'addShipmentResponse'                          => Type\AddShipmentResponse::class,
            'addShipmentResponseItemType'                  => Type\AddShipmentResponseItemType::class,
            'addZalacznikDoReklamacji'                     => Type\AddZalacznikDoReklamacji::class,
            'addZalacznikDoReklamacjiResponse'             => Type\AddZalacznikDoReklamacjiResponse::class,
            'addressLabelContentType'                      => Type\AddressLabelContentType::class,
            'adresKorespondencyjnyType'                    => Type\AdresKorespondencyjnyType::class,
            'adresType'                                    => Type\AdresType::class,
            'awizacjaType'                                 => Type\AwizacjaType::class,
            'awizoPrzesylkiType'                           => Type\AwizoPrzesylkiType::class,
            'buforType'                                    => Type\BuforType::class,
            'cancelReklamacja'                             => Type\CancelReklamacja::class,
            'cancelReklamacjaResponse'                     => Type\CancelReklamacjaResponse::class,
            'changePassword'                               => Type\ChangePassword::class,
            'changePasswordResponse'                       => Type\ChangePasswordResponse::class,
            'clearEnvelope'                                => Type\ClearEnvelope::class,
            'clearEnvelopeByGuids'                         => Type\ClearEnvelopeByGuids::class,
            'clearEnvelopeByGuidsResponse'                 => Type\ClearEnvelopeByGuidsResponse::class,
            'clearEnvelopeResponse'                        => Type\ClearEnvelopeResponse::class,
            'createAccount'                                => Type\CreateAccount::class,
            'createAccountResponse'                        => Type\CreateAccountResponse::class,
            'createEnvelopeBufor'                          => Type\CreateEnvelopeBufor::class,
            'createEnvelopeBuforResponse'                  => Type\CreateEnvelopeBuforResponse::class,
            'createProfil'                                 => Type\CreateProfil::class,
            'createProfilResponse'                         => Type\CreateProfilResponse::class,
            'createShopEZwroty'                            => Type\CreateShopEZwroty::class,
            'createShopEZwrotyResponse'                    => Type\CreateShopEZwrotyResponse::class,
            'daneSentType'                                 => Type\DaneSentType::class,
            'deklaracjaCelna2Type'                         => Type\DeklaracjaCelna2Type::class,
            'deklaracjaCelnaType'                          => Type\DeklaracjaCelnaType::class,
            'deleteShopEZwroty'                            => Type\DeleteShopEZwroty::class,
            'deleteShopEZwrotyResponse'                    => Type\DeleteShopEZwrotyResponse::class,
            'dokumentyTowarzyszaceType'                    => Type\DokumentyTowarzyszaceType::class,
            'doreczenieBiznesowaType'                      => Type\DoreczenieBiznesowaType::class,
            'doreczeniePrzesylkiType'                      => Type\DoreczeniePrzesylkiType::class,
            'doreczenieType'                               => Type\DoreczenieType::class,
            'doreczenieUslugaKurierskaType'                => Type\DoreczenieUslugaKurierskaType::class,
            'doreczenieUslugaPocztowaType'                 => Type\DoreczenieUslugaPocztowaType::class,
            'downloadIWDContent'                           => Type\DownloadIWDContent::class,
            'downloadIWDContentResponse'                   => Type\DownloadIWDContentResponse::class,
            'eMSType'                                      => Type\EMSType::class,
            'ePOExtendedType'                              => Type\EPOExtendedType::class,
            'ePOInfoType'                                  => Type\EPOInfoType::class,
            'ePOSimpleType'                                => Type\EPOSimpleType::class,
            'ePOType'                                      => Type\EPOType::class,
            'ePrzesylkaType'                               => Type\EPrzesylkaType::class,
            'eZDOPakietType'                               => Type\EZDOPakietType::class,
            'eZDOPrzesylkaType'                            => Type\EZDOPrzesylkaType::class,
            'eZwrotKartaType'                              => Type\EZwrotKartaType::class,
            'envelopeInfoType'                             => Type\EnvelopeInfoType::class,
            'errorType'                                    => Type\ErrorType::class,
            'getAccountList'                               => Type\GetAccountList::class,
            'getAccountListResponse'                       => Type\GetAccountListResponse::class,
            'getAddresLabelByGuid'                         => Type\GetAddresLabelByGuid::class,
            'getAddresLabelByGuidCompact'                  => Type\GetAddresLabelByGuidCompact::class,
            'getAddresLabelByGuidCompactResponse'          => Type\GetAddresLabelByGuidCompactResponse::class,
            'getAddresLabelByGuidResponse'                 => Type\GetAddresLabelByGuidResponse::class,
            'getAddresLabelCompact'                        => Type\GetAddresLabelCompact::class,
            'getAddresLabelCompactResponse'                => Type\GetAddresLabelCompactResponse::class,
            'getAddressLabel'                              => Type\GetAddressLabel::class,
            'getAddressLabelResponse'                      => Type\GetAddressLabelResponse::class,
            'getBlankietPobraniaByGuids'                   => Type\GetBlankietPobraniaByGuids::class,
            'getBlankietPobraniaByGuidsResponse'           => Type\GetBlankietPobraniaByGuidsResponse::class,
            'getEPOStatus'                                 => Type\GetEPOStatus::class,
            'getEPOStatusResponse'                         => Type\GetEPOStatusResponse::class,
            'getEZDO'                                      => Type\GetEZDO::class,
            'getEZDOList'                                  => Type\GetEZDOList::class,
            'getEZDOListResponse'                          => Type\GetEZDOListResponse::class,
            'getEZDOResponse'                              => Type\GetEZDOResponse::class,
            'getEnvelopeBufor'                             => Type\GetEnvelopeBufor::class,
            'getEnvelopeBuforList'                         => Type\GetEnvelopeBuforList::class,
            'getEnvelopeBuforListResponse'                 => Type\GetEnvelopeBuforListResponse::class,
            'getEnvelopeBuforResponse'                     => Type\GetEnvelopeBuforResponse::class,
            'getEnvelopeContentFull'                       => Type\GetEnvelopeContentFull::class,
            'getEnvelopeContentFullResponse'               => Type\GetEnvelopeContentFullResponse::class,
            'getEnvelopeContentShort'                      => Type\GetEnvelopeContentShort::class,
            'getEnvelopeContentShortResponse'              => Type\GetEnvelopeContentShortResponse::class,
            'getEnvelopeList'                              => Type\GetEnvelopeList::class,
            'getEnvelopeListResponse'                      => Type\GetEnvelopeListResponse::class,
            'getEnvelopeStatus'                            => Type\GetEnvelopeStatus::class,
            'getEnvelopeStatusResponse'                    => Type\GetEnvelopeStatusResponse::class,
            'getFirmowaPocztaBook'                         => Type\GetFirmowaPocztaBook::class,
            'getFirmowaPocztaBookResponse'                 => Type\GetFirmowaPocztaBookResponse::class,
            'getGuid'                                      => Type\GetGuid::class,
            'getGuidResponse'                              => Type\GetGuidResponse::class,
            'getJednostkaOrganizacyjna'                    => Type\GetJednostkaOrganizacyjna::class,
            'getJednostkaOrganizacyjnaResponse'            => Type\GetJednostkaOrganizacyjnaResponse::class,
            'getKarty'                                     => Type\GetKarty::class,
            'getKartyResponse'                             => Type\GetKartyResponse::class,
            'getKierunki'                                  => Type\GetKierunki::class,
            'getKierunkiInfo'                              => Type\GetKierunkiInfo::class,
            'getKierunkiInfoResponse'                      => Type\GetKierunkiInfoResponse::class,
            'getKierunkiResponse'                          => Type\GetKierunkiResponse::class,
            'getListaPowodowReklamacji'                    => Type\GetListaPowodowReklamacji::class,
            'getListaPowodowReklamacjiResponse'            => Type\GetListaPowodowReklamacjiResponse::class,
            'getListaZgodEZwrotow'                         => Type\GetListaZgodEZwrotow::class,
            'getListaZgodEZwrotowResponse'                 => Type\GetListaZgodEZwrotowResponse::class,
            'getOutboxBook'                                => Type\GetOutboxBook::class,
            'getOutboxBookResponse'                        => Type\GetOutboxBookResponse::class,
            'getPaczkaKorzysciInfo'                        => Type\GetPaczkaKorzysciInfo::class,
            'getPaczkaKorzysciInfoResponse'                => Type\GetPaczkaKorzysciInfoResponse::class,
            'getPasswordExpiredDate'                       => Type\GetPasswordExpiredDate::class,
            'getPasswordExpiredDateResponse'               => Type\GetPasswordExpiredDateResponse::class,
            'getPlacowkiPocztowe'                          => Type\GetPlacowkiPocztowe::class,
            'getPlacowkiPocztoweResponse'                  => Type\GetPlacowkiPocztoweResponse::class,
            'getPrintForParcel'                            => Type\GetPrintForParcel::class,
            'getPrintForParcelResponse'                    => Type\GetPrintForParcelResponse::class,
            'getProfilList'                                => Type\GetProfilList::class,
            'getProfilListResponse'                        => Type\GetProfilListResponse::class,
            'getReklamacje'                                => Type\GetReklamacje::class,
            'getReklamacjeResponse'                        => Type\GetReklamacjeResponse::class,
            'getShopEZwrotyList'                           => Type\GetShopEZwrotyList::class,
            'getShopEZwrotyListResponse'                   => Type\GetShopEZwrotyListResponse::class,
            'getUbezpieczeniaInfo'                         => Type\GetUbezpieczeniaInfo::class,
            'getUbezpieczeniaInfoResponse'                 => Type\GetUbezpieczeniaInfoResponse::class,
            'getUrzedyNadania'                             => Type\GetUrzedyNadania::class,
            'getUrzedyNadaniaResponse'                     => Type\GetUrzedyNadaniaResponse::class,
            'getUrzedyWydajaceEPrzesylki'                  => Type\GetUrzedyWydajaceEPrzesylki::class,
            'getUrzedyWydajaceEPrzesylkiResponse'          => Type\GetUrzedyWydajaceEPrzesylkiResponse::class,
            'getWplatyCKP'                                 => Type\GetWplatyCKP::class,
            'getWplatyCKPResponse'                         => Type\GetWplatyCKPResponse::class,
            'getZapowiedziFaktur'                          => Type\GetZapowiedziFaktur::class,
            'getZapowiedziFakturResponse'                  => Type\GetZapowiedziFakturResponse::class,
            'globalExpresType'                             => Type\GlobalExpresType::class,
            'hello'                                        => Type\Hello::class,
            'helloResponse'                                => Type\HelloResponse::class,
            'infoPaczkaKorzysciType'                       => Type\InfoPaczkaKorzysciType::class,
            'isMiejscowa'                                  => Type\IsMiejscowa::class,
            'isMiejscowaResponse'                          => Type\IsMiejscowaResponse::class,
            'isObszarMiasto'                               => Type\IsObszarMiasto::class,
            'isObszarMiastoResponse'                       => Type\IsObszarMiastoResponse::class,
            'jednostkaOrganizacyjnaType'                   => Type\JednostkaOrganizacyjnaType::class,
            'kartaType'                                    => Type\KartaType::class,
            'kategoriePowodowReklamacjiType'               => Type\KategoriePowodowReklamacjiType::class,
            'kierunekType'                                 => Type\KierunekType::class,
            'listBiznesowyType'                            => Type\ListBiznesowyType::class,
            'listWartosciowyKrajowyType'                   => Type\ListWartosciowyKrajowyType::class,
            'listZwyklyFirmowyType'                        => Type\ListZwyklyFirmowyType::class,
            'listZwyklyType'                               => Type\ListZwyklyType::class,
            'lokalizacjaGeograficznaType'                  => Type\LokalizacjaGeograficznaType::class,
            'moveShipments'                                => Type\MoveShipments::class,
            'moveShipmentsResponse'                        => Type\MoveShipmentsResponse::class,
            'obszarAdresowyResponseType'                   => Type\ObszarAdresowyResponseType::class,
            'obszarAdresowyType'                           => Type\ObszarAdresowyType::class,
            'oczekujeNaZgodeEZwrotType'                    => Type\OczekujeNaZgodeEZwrotType::class,
            'odbiorPrzesylkiOdNadawcyType'                 => Type\OdbiorPrzesylkiOdNadawcyType::class,
            'opakowanieType'                               => Type\OpakowanieType::class,
            'oplacaOdbiorcaKartaType'                      => Type\OplacaOdbiorcaKartaType::class,
            'oplacaOdbiorcaType'                           => Type\OplacaOdbiorcaType::class,
            'paczkaPocztowaPLUSType'                       => Type\PaczkaPocztowaPLUSType::class,
            'paczkaPocztowaType'                           => Type\PaczkaPocztowaType::class,
            'paczkaZagranicznaPremiumType'                 => Type\PaczkaZagranicznaPremiumType::class,
            'paczkaZagranicznaType'                        => Type\PaczkaZagranicznaType::class,
            'pakietType'                                   => Type\PakietType::class,
            'paletaType'                                   => Type\PaletaType::class,
            'placowkaPocztowaType'                         => Type\PlacowkaPocztowaType::class,
            'platnikType'                                  => Type\PlatnikType::class,
            'pobranieType'                                 => Type\PobranieType::class,
            'pocztexKrajowyType'                           => Type\PocztexKrajowyType::class,
            'potwierdzenieDoreczeniaType'                  => Type\PotwierdzenieDoreczeniaType::class,
            'potwierdzenieOdbioruBiznesowaType'            => Type\PotwierdzenieOdbioruBiznesowaType::class,
            'potwierdzenieOdbioruKurierskaType'            => Type\PotwierdzenieOdbioruKurierskaType::class,
            'potwierdzenieOdbioruPaczkowaType'             => Type\PotwierdzenieOdbioruPaczkowaType::class,
            'potwierdzenieOdbioruType'                     => Type\PotwierdzenieOdbioruType::class,
            'powodReklamacjiType'                          => Type\PowodReklamacjiType::class,
            'powodSzczegolowyType'                         => Type\PowodSzczegolowyType::class,
            'printResultType'                              => Type\PrintResultType::class,
            'printType'                                    => Type\PrintType::class,
            'profilType'                                   => Type\ProfilType::class,
            'przesylkaBiznesowaPlusType'                   => Type\PrzesylkaBiznesowaPlusType::class,
            'przesylkaBiznesowaType'                       => Type\PrzesylkaBiznesowaType::class,
            'przesylkaEPOType'                             => Type\PrzesylkaEPOType::class,
            'przesylkaEZwrotPaczkaPlusType'                => Type\PrzesylkaEZwrotPaczkaPlusType::class,
            'przesylkaEZwrotPaczkaType'                    => Type\PrzesylkaEZwrotPaczkaType::class,
            'przesylkaEZwrotPocztexType'                   => Type\PrzesylkaEZwrotPocztexType::class,
            'przesylkaFirmowaPoleconaType'                 => Type\PrzesylkaFirmowaPoleconaType::class,
            'przesylkaFullType'                            => Type\PrzesylkaFullType::class,
            'przesylkaHandlowaType'                        => Type\PrzesylkaHandlowaType::class,
            'przesylkaListowaZadeklarowanaWartoscType'     => Type\PrzesylkaListowaZadeklarowanaWartoscType::class,
            'przesylkaNaWarunkachSzczegolnychType'         => Type\PrzesylkaNaWarunkachSzczegolnychType::class,
            'przesylkaNieRejestrowanaType'                 => Type\PrzesylkaNieRejestrowanaType::class,
            'przesylkaNierejestrowanaKrajowaType'          => Type\PrzesylkaNierejestrowanaKrajowaType::class,
            'przesylkaPaletowaType'                        => Type\PrzesylkaPaletowaType::class,
            'przesylkaPobraniowaType'                      => Type\PrzesylkaPobraniowaType::class,
            'przesylkaPoleconaKrajowaType'                 => Type\PrzesylkaPoleconaKrajowaType::class,
            'przesylkaPoleconaZagranicznaType'             => Type\PrzesylkaPoleconaZagranicznaType::class,
            'przesylkaRejestrowanaType'                    => Type\PrzesylkaRejestrowanaType::class,
            'przesylkaShortType'                           => Type\PrzesylkaShortType::class,
            'przesylkaType'                                => Type\PrzesylkaType::class,
            'przesylkaZadeklarowanaWartoscZagranicznaType' => Type\PrzesylkaZadeklarowanaWartoscZagranicznaType::class,
            'przesylkaZagranicznaType'                     => Type\PrzesylkaZagranicznaType::class,
            'punktWydaniaPrzesylkiBiznesowejPlusType'      => Type\PunktWydaniaPrzesylkiBiznesowejPlusType::class,
            'reklamacjaInfoType'                           => Type\ReklamacjaInfoType::class,
            'reklamacjaRozpatrzonaType'                    => Type\ReklamacjaRozpatrzonaType::class,
            'reklamowaType'                                => Type\ReklamowaType::class,
            'reklamowanaPrzesylkaType'                     => Type\ReklamowanaPrzesylkaType::class,
            'relatedToAllegroType'                         => Type\RelatedToAllegroType::class,
            'rodzajListType'                               => Type\RodzajListType::class,
            'sendEnvelope'                                 => Type\SendEnvelope::class,
            'sendEnvelopeResponse'                         => Type\SendEnvelopeResponse::class,
            'sendEnvelopeResponseType'                     => Type\SendEnvelopeResponseType::class,
            'setAktywnaKarta'                              => Type\SetAktywnaKarta::class,
            'setAktywnaKartaResponse'                      => Type\SetAktywnaKartaResponse::class,
            'setEnvelopeBuforDataNadania'                  => Type\SetEnvelopeBuforDataNadania::class,
            'setEnvelopeBuforDataNadaniaResponse'          => Type\SetEnvelopeBuforDataNadaniaResponse::class,
            'setJednostkaOrganizacyjna'                    => Type\SetJednostkaOrganizacyjna::class,
            'setJednostkaOrganizacyjnaResponse'            => Type\SetJednostkaOrganizacyjnaResponse::class,
            'setStatusZgodyNaEZwrot'                       => Type\SetStatusZgodyNaEZwrot::class,
            'setStatusZgodyNaEZwrotResponse'               => Type\SetStatusZgodyNaEZwrotResponse::class,
            'shopEZwrotyInfoType'                          => Type\ShopEZwrotyInfoType::class,
            'shopEZwrotyType'                              => Type\ShopEZwrotyType::class,
            'sposobDoreczeniaType'                         => Type\SposobDoreczeniaType::class,
            'statusZgodyEZwrotType'                        => Type\StatusZgodyEZwrotType::class,
            'subPrzesylkaBiznesowaPlusType'                => Type\SubPrzesylkaBiznesowaPlusType::class,
            'subPrzesylkaBiznesowaType'                    => Type\SubPrzesylkaBiznesowaType::class,
            'subPrzesylkaPaletowaType'                     => Type\SubPrzesylkaPaletowaType::class,
            'subUslugaKurierskaType'                       => Type\SubUslugaKurierskaType::class,
            'subUslugaPaczkowaType'                        => Type\SubUslugaPaczkowaType::class,
            'szczegolyDeklaracjiCelnejType'                => Type\SzczegolyDeklaracjiCelnejType::class,
            'szczegolyZawartosciPrzesylkiZagranicznejType' => Type\SzczegolyZawartosciPrzesylkiZagranicznejType::class,
            'trasaRequestType'                             => Type\TrasaRequestType::class,
            'trasaResponseType'                            => Type\TrasaResponseType::class,
            'ubezpieczeniaInfoType'                        => Type\UbezpieczeniaInfoType::class,
            'ubezpieczenieType'                            => Type\UbezpieczenieType::class,
            'updateAccount'                                => Type\UpdateAccount::class,
            'updateAccountResponse'                        => Type\UpdateAccountResponse::class,
            'updateEnvelopeBufor'                          => Type\UpdateEnvelopeBufor::class,
            'updateEnvelopeBuforResponse'                  => Type\UpdateEnvelopeBuforResponse::class,
            'updateProfil'                                 => Type\UpdateProfil::class,
            'updateProfilResponse'                         => Type\UpdateProfilResponse::class,
            'updateShopEZwroty'                            => Type\UpdateShopEZwroty::class,
            'updateShopEZwrotyResponse'                    => Type\UpdateShopEZwrotyResponse::class,
            'uploadIWDContent'                             => Type\UploadIWDContent::class,
            'uploadIWDContentResponse'                     => Type\UploadIWDContentResponse::class,
            'urzadNadaniaFullType'                         => Type\UrzadNadaniaFullType::class,
            'urzadWydaniaEPrzesylkiType'                   => Type\UrzadWydaniaEPrzesylkiType::class,
            'uslugaKurierskaType'                          => Type\UslugaKurierskaType::class,
            'uslugaPaczkowaType'                           => Type\UslugaPaczkowaType::class,
            'uslugiType'                                   => Type\UslugiType::class,
            'wplataCKPType'                                => Type\WplataCKPType::class,
            'wspolrzednaGeograficznaType'                  => Type\WspolrzednaGeograficznaType::class,
            'wyslijLinkaOStatusieEZwrotu'                  => Type\WyslijLinkaOStatusieEZwrotu::class,
            'wyslijLinkaOStatusieEZwrotuResponse'          => Type\WyslijLinkaOStatusieEZwrotuResponse::class,
            'zalacznikDoReklamacjiType'                    => Type\ZalacznikDoReklamacjiType::class,
            'zamowKuriera'                                 => Type\ZamowKuriera::class,
            'zamowKurieraResponse'                         => Type\ZamowKurieraResponse::class,
            'zwrotDokumentowBiznesowaType'                 => Type\ZwrotDokumentowBiznesowaType::class,
            'zwrotDokumentowKurierskaType'                 => Type\ZwrotDokumentowKurierskaType::class,
            'zwrotDokumentowType'                          => Type\ZwrotDokumentowType::class,
            'zwrotPrzesylkiType'                           => Type\ZwrotPrzesylkiType::class,
            'zwrotType'                                    => Type\ZwrotType::class,
        ];
    }
}
