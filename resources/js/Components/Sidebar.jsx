import { Box, Button, Flex, Image, Text } from '@chakra-ui/react';

export default function Sidebar() {
  return (
    <Flex
      flexDir="column"
      alignItems="center"
      bg="#0B0B20"
      gap="32px"
      w={339}
      h={'100vh'}
      pos="relative"
      _before={{
        content: `""`,
        pos: 'absolute',
        bgImage: "url('/sidebar.jpeg')",
        bgRepeat: 'no-repeat',
        bgPos: 'right',
        bgSize: 'cover',
        top: 0,
        bottom: 0,
        left: 0,
        right: 0,
        opacity: 0.2,
      }}
    >
      <Box pos="relative" justifyContent="center" pt={'80px'}>
        <Image
          src="/logo.png"
          px="2px"
          py="10px"
          bg="rgba(0,0,0,0.14)"
          rounded="16px"
        />
      </Box>
      <Flex flexDir="column" pos="relative" gap="16px" width={307}>
        <Text fontSize={31} color="#066C98" fontWeight={700}>
          Main Menu
        </Text>
        <Flex gap="6px" flexDir="column">
          <Button
            fontSize="18px"
            fontWeight="400"
            justifyContent="start"
            px="16px"
            py="8px"
            width="100%"
            bg="transparent"
            color="#818184"
            rounded="18px"
            _hover={{ color: '#fff', bg: '#161632', fontWeight: '700' }}
          >
            Dashboard
          </Button>
          <Button
            fontSize="18px"
            fontWeight="400"
            justifyContent="start"
            px="16px"
            py="8px"
            width="100%"
            bg="transparent"
            color="#818184"
            rounded="18px"
            _hover={{ color: '#fff', bg: '#161632', fontWeight: '700' }}
          >
            Data Master
          </Button>
        </Flex>
      </Flex>
    </Flex>
  );
}
