import AuthLayout from '@/Layouts/AuthLayout';
import {
  Flex,
  Heading,
  Tab,
  TabIndicator,
  TabList,
  Tabs,
} from '@chakra-ui/react';

// TODO: move this code to data master page
export default function Welcome({ laravelVersion, query }) {
  const tab = {
    klien: 0,
    kategori: 1,
    layanan: 2,
    struktur: 3,
  };

  return (
    <AuthLayout>
      <Flex flexDir="column" gap="16px" px="14px">
        <Heading variant="h1" color="#066C98">
          Data Master
        </Heading>
        <Tabs isLazy variant="unstyled" defaultIndex={query ? tab[query] : 0}>
          <TabList gap="28px">
            <Tab
              color="#1D2F58"
              _selected={{ color: '#066C98', fontWeight: '700' }}
            >
              Klien
            </Tab>
            <Tab
              color="#1D2F58"
              _selected={{ color: '#066C98', fontWeight: '700' }}
            >
              Kategori
            </Tab>
            <Tab
              color="#1D2F58"
              _selected={{ color: '#066C98', fontWeight: '700' }}
            >
              Layanan
            </Tab>
            <Tab
              color="#1D2F58"
              _selected={{ color: '#066C98', fontWeight: '700' }}
            >
              Struktur
            </Tab>
          </TabList>
          <TabIndicator
            mt="-1.5px"
            height="1px"
            bg="#818184"
            borderRadius="1px"
          />
        </Tabs>
      </Flex>
    </AuthLayout>
  );
}
